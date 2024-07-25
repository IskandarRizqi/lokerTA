<?php

namespace App\Http\Controllers;

use App\Helper\GlobalHelper;
use App\Models\InputdataModel;
use App\Models\KriteriaModel;
use App\Models\LamaranModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        if (Auth::check() == false) {
            // $data['rekomendasi'] = GlobalHelper::getrecomend(Auth::id());

            $data['rekomendasi'] = [];
            // return $data;
            $data['inputdata'] = InputdataModel::get();
            return view('front.pages.home', $data);
        }
        if (Auth::user()->role_id < 1) {
            if (!Auth::user()->kriteria_id) {
                return redirect::to('/dashboard');
            }
        }
    
      
        $data['rekomendasi'] = GlobalHelper::getrecomend(Auth::id());
        $data['inputdata'] = InputdataModel::select()
       
        ->orderby('created_at','DESC')->get();
      
        
        // return $data;
        return view('front.pages.home', $data);
    }

    public function index_admin(Request $request)
    {
        $x['total_loker'] = InputdataModel::count();
        $x['total_admin'] = User::where('role_id', 0)->count();
        $x['total_user'] = User::where('role_id', 1)->count();
        $x['total_lamaran'] = LamaranModel::count();
        $x['lamaran_setahun'] = [];
        for ($i = 01; $i < 13; $i++) {
            $ls = LamaranModel::whereYear('created_at', now()->year)
                ->whereMonth('created_at', ($i + 1))
                ->count();
            array_push($x['lamaran_setahun'], $ls);
        }

        $x['tawal'] = now()->startOfMonth();
        $x['takhir'] = now()->endOfMonth();
        if ($request->tanggal_awal && $request->tanggal_akhir) {
            $x['tawal'] = $request->tanggal_awal;
            $x['takhir'] = $request->tanggal_akhir;
        }

        $x['data'] = LamaranModel::select(
            'lamaran_models.*',
            'inputdata.namaperusahaan',
            'users.name',
        )
            ->join('inputdata', 'inputdata.id', 'lamaran_models.loker_id')
            ->join('users', 'users.id', 'lamaran_models.user_id')
            ->whereDate('lamaran_models.created_at', '>=', $x['tawal'])
            ->whereDate('lamaran_models.created_at', '<=', $x['takhir'])
            ->get();
        // return $x;
        return view('admin.pages.dashboard', $x);
    }

    public function caripekerjaan(Request $request)
    {
        // return $request->all();
        $x = [];
        $x['data'] = InputdataModel::select()
            
        
            ->where(function ($q) use ($request) 
           
            {
                // if ($request->job_title) {
                //     // $q->where('kategori', 'like', '%' . $request->job_title . '%');
                //     $q->whereRaw('LOWER(`kategori`) LIKE ? ', ['%' . trim(strtolower($request->job_title)) . '%']);
                // }
                // if ($request->lokasi) {
                //     // $q->where('tempatperusahaan', 'like', '%' . $request->lokasi . '%');
                //     $q->whereRaw('LOWER(`tempatperusahaan`) LIKE ? ', ['%' . trim(strtolower($request->lokasi)) . '%']);
                // }
                // if ($request->lulusan) {
                //     $q->where('pendidikan', 'like', '%' . $request->lulusan . '%');
                // }

                if ($request->formberanda) {
                    if ($request->job_title) {
                        $q->whereIn('kategori',  $request->job_title);
                    }
                    if ($request->lokasi) {
                        $q->whereIn('tempatperusahaan',  $request->lokasi);
                    }
                    if ($request->lulusan) {
                        $q->whereIn('pendidikan',  $request->lulusan);
                    }
                    if ($request->jam) {
                        $q->whereIn('jam',  $request->jam);
                    }
                } else {
                    if ($request->job_title) {
                        $q->where('kategori', 'ilike', '%' . $request->job_title . '%');
                    }
                    if ($request->lokasi) {
                        $q->where('tempatperusahaan', 'ilike', '%' . $request->Lokasi . '%');
                    }
                    if ($request->lulusan) {
                        $q->where('pendidikan', 'ilike', '%' . $request->lulusan . '%');
                    }
                }
            })
            
            ->orderby('created_at','DESC')
            ->paginate(9);
            
        $x['job_title'] = '';
        $x['lokasi'] = '';
        $x['lulusan'] = '';
        $x['jt'] = [];
        $x['lk'] = [];
        $x['ll'] = [];
        $x['jm'] = [];
        if ($request->job_title) {
            $x['job_title'] = $request->job_title;
        }
        if ($request->lokasi) {
            $x['lokasi'] = $request->lokasi;
        }
        if ($request->lulusan) {
            $x['lulusan'] = $request->lulusan;
        }
        if ($request->formberanda) {
            $x['jt'] = $request->job_title;
            $x['lk'] = $request->lokasi;
            $x['ll'] = $request->lulusan;
            $x['jm'] = $request->jam;
        }
        // return $x;
        
        return view('front.pages.cariloker', $x);
    }

    public function historylamaran()
    {
        $data = [];
        $data['data'] = LamaranModel::select()
            ->with('loker')
            ->where('user_id', Auth::id())
            ->get();
        // return $data;
        return view('front.profile.historylamaran', $data);
    }

    public function editkriteria()
    {
        $data = [];
        $data['data'] = KriteriaModel::where('id', Auth::user()->kriteria_id)->first();
        return view('front.profile.kriteria', $data);
    }

    public function updatekriteria(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jk' => 'required',
            'bidang' => 'required',
            'lokasi' => 'required',
            'pendidikan' => 'required',
            'jam' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect::back()->withErrors($validator)->withInput($request->all());
        }
        $k = KriteriaModel::where('id', Auth::user()->kriteria_id)->update([
            'jk' => $request->jk,
            'bidang' => $request->bidang,
            'lokasi' => $request->lokasi,
            'pendidikan' => $request->pendidikan,
            'jam' => $request->jam,
        ]);
        if ($k) {
            return Redirect::back()->with('info', 'Kriteria telah diperbarui');
        }
        return Redirect::back()->with('info', 'Kriteria gagal diperbarui');
    }

    public function custom_verify(Request $request)
    {
        if ($request->verify_id && $request->hash) {
            $u = User::where('id', $request->verify_id)->first();
            if (!$u) {
                return 'Data tidak ditemukan';
            }

            User::where('id', $request->verify_id)->update([
                'email_verified_at' => now()
            ]);

            return Redirect::to('/profile');
        }
    }

    public function custom_logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

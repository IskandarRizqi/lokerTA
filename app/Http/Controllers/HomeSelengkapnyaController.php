<?php

namespace App\Http\Controllers;

use App\Helper\GlobalHelper;
use App\Models\InputdataModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeSelengkapnyaController extends Controller
{
    public function index()
    {
        $id = null;
        if (Auth::user()->role_id > 0) {
            if (!Auth::user()->kriteria_id) {
                return Redirect::to('/kriteria');
            }
        }
        if (Auth::user()->role_id < 1) {
            if (!Auth::user()->kriteria_id) {
                return redirect::to('/dashboard');
            }
        }

        $data['rekomendasi'] = GlobalHelper::getrecomend($id);
        // return $data;
        $data['inputdata'] = InputdataModel::get();
        return view('front.pages.homeselengkapnya', $data);
    }



    public function caripekerjaan(Request $request)
    {
        // return $request->all();
        $x = [];
        $x['data'] = InputdataModel::select()
            ->where(function ($q) use ($request) {
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
                   if ($request->job_title) {
                    $q->where("kategori","ilike", '%' . $request->job_title . '%' );
                }
                if ($request->lokasi) {
                  
                    $q->where("tempatperusahaan","ilike", '%' . $request->Lokasi . '%');
                }
                if ($request->lulusan) {
                    $q->where('pendidikan', 'ilike', '%' . $request->lulusan . '%');
                }
            })
            ->paginate(8);
        $x['job_title'] = '';
        $x['lokasi'] = '';
        $x['lulusan'] = '';
        if ($request->job_title) {
            $x['job_title'] = $request->job_title;
        }
        if ($request->lokasi) {
            $x['lokasi'] = $request->lokasi;
        }
        if ($request->lulusan) {
            $x['lulusan'] = $request->lulusan;
        }
        // return $x;
        return view('front.pages.cariloker', $x);
    }
}

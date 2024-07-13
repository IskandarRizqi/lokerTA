<?php

namespace App\Http\Controllers;

use App\Models\InformasiPribadiModel;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class InformasiPribadiController extends Controller
{
    public function index()
    {
        $data['informasipribadi'] = InformasiPribadiModel::get();
        return view('front.cvats.pages.informasipribadi.index');
    }

    public function create()
    {

        $ops['provinsis'] = DB::table('provinsis')->get();
        // $ops['kecamatans'] = DB::table('kecamatans')->get();
        // $ops['kelurahans'] = DB::table('kelurahans')->get();
        $ops['informasipribadi'] = InformasiPribadiModel::where('id_user', Auth::id())->first();
         

        // return $ops;
        return view('front.cvats.pages.informasipribadi.tambah', $ops);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //   return $request->all();
        $validator = Validator::make($request->all(), [
            // 'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'no_wa' => 'required',
            'provinsi' => 'required',
            'kota_kab' => 'required',
            'kelurahan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'detailalamat' => 'required',
            'deskripsi' => 'required',
            'kecamatan' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $inp = [
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'no_wa' => $request->no_wa,
            'provinsi' => $request->provinsi,
            'kota_kab' => $request->kota_kab,
            'kelurahan' => $request->kelurahan,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'detailalamat' => $request->detailalamat,
            'deskripsi' => $request->deskripsi,
            'kecamatan' => $request->kecamatan,
            'gambar' => '',
            'id_user' => Auth::id(),
        ];
        if ($request->gambar) {
            $inp['gambar'] = $request->file('gambar')->store('informasipribadi/' . time());
        }
        if ($request->file_pendukung) {
            $inp['file_pendukung'] = $request->file('file_pendukung')->store('informasipribadi/' . time());
        }
        InformasiPribadiModel::updateOrCreate([
            'id_user' => Auth::id()
        ], $inp);

        // return Redirect::back()->with('sukses', 'Berhasil disimpan');
        return redirect('/informasipribadi')->with('sukses', 'Berhasil disimpan');
    }


    public function getkabupaten($id)
    {
        return DB::table('kabupatens')->where('provinsi_id', $id)->get();
    }
    public function getkecamatan($id)
    {

        return DB::table('kecamatans')->where('kota_id', $id)->get();
    }
    public function getkelurahan($id)
    {

        return DB::table('kelurahans')->where('kecamatan_id', $id)->get();
    }
    public function show(string $id)
    {
        $data['edit'] = InformasiPribadiModel::where('id', $id)->first();
        return view('admin.pages.informasipribadi.edit', $data);
    }

    // public function edit(string $id)
    // {
    //     //
    // }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'no_wa' => 'required',
            'provinsi' => 'required',
            'kota_kab' => 'required',
            'kelurahan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'detailalamat' => 'required',
            'deskripsi' => 'required',
            'kecamatan' => 'required',


        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar')->store('informasipribadi/' . time());
            InformasiPribadiModel::where('id', $id)->update([
                'id' => $request->idinformasipribadi,
                'gambar' => $file,
                'nama' => $request->nama,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'no_wa' => $request->no_wa,
                'provinsi' => $request->provinsi,
                'kota_kab' => $request->kota_kab,
                'kelurahan' => $request->kelurahan,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'detailalamat' => $request->detailalamat,
                'deskripsi' => $request->deskripsi,
                'kecamatan' => $request->kecamatan,
                'id_user' => Auth::id(),
            ]);
            return redirect('/informasipribadi')->with('success', 'Berhasil edit ');
        }

        // public function destroy(string $id)
        // {
        //     InformasiPribadiModel::where('id', $id)->delete();
        //     return redirect('/informaspribadi')->with('success', 'Berhasil hapus data');
        // }
    }
}

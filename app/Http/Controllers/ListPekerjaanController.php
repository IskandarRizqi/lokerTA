<?php

namespace App\Http\Controllers;

use App\Models\LamaranModel;
use App\Models\ListPekerjaanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ListPekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_pekerjaan'] = ListPekerjaanModel::all();
        return view('front.pages.list_pekerjaan.list_pekerjaan', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.pages.list_pekerjaan.tambah_list_pekerjaan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_pekerjaan' => 'required',
            'deskripsi' => 'required',

        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        ListPekerjaanModel::create([
            'uid' => Str::uuid(),
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'deskripsi' => $request->deskripsi,

        ]);

        return redirect('/list_pekerjaan')->with('success', 'Berhasil tambah list pekerjaan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ListPekerjaanModel $listPekerjaanModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListPekerjaanModel $listPekerjaanModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ListPekerjaanModel $listPekerjaanModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListPekerjaanModel $listPekerjaanModel)
    {
        //
    }

    public function listlamaran(Request $r)
    {
        $x = [];
        $x['data'] = LamaranModel::select(
            'lamaran_models.*',
            'users.name',
            'users.kriteria_id',
            'inputdata.gambar',
            'inputdata.jk',
            'inputdata.namaperusahaan',
            'inputdata.kategori',
            'inputdata.pendidikan',
            'inputdata.jam',
            'inputdata.tempatperusahaan',
            'inputdata.deskripsi',
            'inputdata.email',
            'informasipribadi.file_pendukung'
        )
            ->leftJoin('users', 'users.id', 'lamaran_models.user_id')
            ->leftJoin('inputdata', 'inputdata.id', 'lamaran_models.loker_id')
            ->leftJoin('informasipribadi', 'informasipribadi.id_user', 'lamaran_models.user_id')
            ->orderBy('lamaran_models.created_at', 'DESC')
            ->get();
        // return $x;
        return view('admin.pages.lamaran.index', $x);
    }
    public function statuslamaran(Request $r, $id, $status)
    {
        try {
            LamaranModel::where('id', $id)->update([
                'status' => $status
            ]);
            return Redirect::back()->with('info', 'Update status berhasil');
        } catch (\Throwable $th) {
            return Redirect::back()->with('info', 'Update status gagal');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PengalamanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class PengalamanController extends Controller
{
    public function index()
    {
        return view('front.cvats.pages.pengalaman.index');
    }

    public function create()
    {
        $x['p'] = PengalamanModel::where('id_user', Auth::id())->first();
        return view('front.cvats.pages.pengalaman.tambah', $x);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'perusahaan'  => 'required',
            'posisikerja' => 'required',
            'kota' => 'required',
            'negara' => 'required',
            'tanggalmulai' => 'required',
            'tanggalselesai' => 'required',
            'deskripsi' => 'required',



        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        PengalamanModel::updateOrCreate([
            'id_user' => Auth::id()
        ], [
            'id' => $request->idpengalaman,
            'perusahaan' => $request->perusahaan,
            'posisikerja' => $request->posisikerja,
            'kota' => $request->kota,
            'negara' => $request->negara,
            'tanggalmulai' => $request->tanggalmulai,
            'tanggalselesai' => $request->tanggalselesai,
            'deskripsi' => $request->deskripsi,
            'id_user' => Auth::id(),




        ]);
        return redirect('/pengalaman')->with('ss', 'Berhasil tambah ');
    }

    public function show(string $id)
    {
        $data['edit'] = PengalamanModel::where('id', $id)->first();
        return view('front.cvats.pages.pengalaman.edit', $data);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'perusahaan'  => 'required',
            'posisikerja' => 'required',
            'kota' => 'required',
            'negara' => 'required',
            'tanggalmulai' => 'required',
            'tanggalselesai' => 'required',
            'deskripsi' => 'required',



        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        PengalamanModel::where('id', $id)->update([
            'id' => $request->idpengalaman,
            'perusahaan' => $request->perusahaan,
            'posisikerja' => $request->posisikerja,
            'kota' => $request->kota,
            'negara' => $request->negara,
            'tanggalmulai' => $request->tanggalmulai,
            'tanggalselesai' => $request->tanggalselesai,
            'deskripsi' => $request->deskripsi,
            'id_user' => Auth::id(),

        ]);
        return redirect('/pengalaman')->with('success', 'Berhasil edit ');
    }

    public function destroy(string $id)
    {
        PengalamanModel::where('id', $id)->delete();
        return redirect('/pengalaman')->with('success', 'Berhasil hapus data');
    }
}

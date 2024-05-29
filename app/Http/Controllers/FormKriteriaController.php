<?php

namespace App\Http\Controllers;

use App\Helper\GlobalHelper;
use App\Models\KriteriaModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class FormKriteriaController extends Controller
{

    public function index()
    {
        $data['kriteria'] = KriteriaModel::get();
        return view('front.pages.formkriteria', $data);
    }

    public function create()
    {
        return view('front.pages.formkriteria');
    }

    public function store(Request $request)
    {
        //   return $request->all();


        $validator = Validator::make($request->all(), [
            'jk' => 'required',
            'bidang' => 'required',
            'lokasi' => 'required',
            'pendidikan' => 'required',
            'jam' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $k = KriteriaModel::Create([
            'id' => $request->idkriteria,
            'jk' => $request->jk,
            'bidang' => $request->bidang,
            'lokasi' => $request->lokasi,
            'pendidikan' => $request->pendidikan,
            'jam' => $request->jam,

        ]);

        // return $k;

        if ($k) {
            User::where('id', Auth::user()->id)->update([
                'kriteria_id' => $k->id
            ]);

            return redirect('/');
        }

        return redirect('/kriteria')->with('sukses', 'Berhasil disimpan');
    }



    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {

        $validator = validator::make($request->all(), [

            'jk' => 'required',
            'bidang' => 'required',
            'lokasi' => 'required',
            'pendidikan' => 'required',
            'jam' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect::back()->withErrors($validator)->withInput($request->all());
        }


        KriteriaModel::where('id', $id)->update([
            'id' => $request->idkriteria,

            'jk' => $request->jk,
            'bidang' => $request->bidang,
            'lokasi' => $request->lokasi,
            'pendidikan' => $request->pendidikan,
            'jam' => $request->jam,

        ]);

        return redirect('/kriteria')->with('succes', 'Berhasil tambah');
    }


    public function destroy(string $id)
    {


        KriteriaModel::where('id', $id)->delete();
        return redirect('/kriteria')->with('success', 'Berhasil hapus data');
    }
}

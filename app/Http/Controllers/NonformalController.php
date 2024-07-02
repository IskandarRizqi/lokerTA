<?php

namespace App\Http\Controllers;


use App\Models\NonFormalModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class NonformalController extends Controller
{
    public function index()
    {
        return view('front.cvats.pages.pendidikan.nonformal.index');
    }

    public function create()
    {
        return view('front.cvats.pages.pendidikan.nonformal.tambah');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'namakursus'  => 'required',
            'institusi' => 'required',
            'tanggalmulai' => 'required',
            'tanggalselesai' => 'required',



        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        NonFormalModel::create([
            'id' => $request->idnonformal,
            'namakursus' => $request->namakursus,
            'institusi' => $request->institusi,
            'tanggalmulai' => $request->tanggalmulai,
            'tanggalselesai' => $request->tanggalselesai,
            'id_user' => Auth::id(),




        ]);
        return redirect('/nonformal')->with('ss', 'Berhasil tambah ');
    }

    public function show(string $id)
    {
        $data['edit'] = NonFormalModel::where('id', $id)->first();
        return view('front.cvats.pages.nonformal.edit', $data);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'namakursus'  => 'required',
            'institusi' => 'required',
            'tanggalmulai' => 'required',
            'tanggalselesai' => 'required',



        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        NonFormalModel::where('id', $id)->update([
            'id' => $request->idnonformal,
            'namakursus' => $request->namakursus,
            'institusi' => $request->institusi,
            'tanggalmulai' => $request->tanggalmulai,
            'tanggalselesai' => $request->tanggalselesai,
            'id_user' => Auth::id(),

        ]);
        return redirect('/nonformal')->with('success', 'Berhasil edit ');
    }

    public function destroy(string $id)
    {
        NonFormalModel::where('id', $id)->delete();
        return redirect('/nonformal')->with('success', 'Berhasil hapus data');
    }
}

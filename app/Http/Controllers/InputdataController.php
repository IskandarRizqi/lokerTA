<?php

namespace App\Http\Controllers;

use App\Models\InputdataModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Psy\Readline\Hoa\Console;

class InputdataController extends Controller
{
    public function index()
    {
        $data['inputdata'] = InputdataModel::get();
        return view('admin.pages.inputdata.index', $data);
    }

    public function create()
    {
        return view('admin.pages.Inputdata.tambah');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar')->store('inputdata/' . time());

            $validator = validator::make($request->all(), [

                'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'jk' => 'required',
                'namaperusahaan' => 'required',
                'kategori' => 'required',
                'pendidikan' => 'required',
                'jam' => 'required',
                'tempatperusahaan' => 'required',
                'deskripsi' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect::back()->withErrors($validator)->withInput($request->all());
            }
            InputdataModel::create([
                'id' => $request->idinputdata,
                'gambar' => $file,
                'jk' => $request->jk,
                'namaperusahaan' => $request->namaperusahaan,
                'kategori' => $request->kategori,
                'pendidikan' => $request->pendidikan,
                'jam' => $request->jam,
                'tempatperusahaan' => $request->tempatperusahaan,
                'deskripsi' => $request->deskripsi,
            ]);

            return redirect('/inputdata')->with('ss', 'Berhasil tambah');
        }
    }
    public function show(string $id)
    {
        $data['edit'] = InputdataModel::where('id', $id)->first();
        return view('admin.pages.inputdata.edit', $data);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $validator = validator::make($request->all(), [
            // 'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'jk' => 'required',
            'namaperusahaan' => 'required',
            'kategori' => 'required',
            'pendidikan' => 'required',
            'jam' => 'required',
            'tempatperusahaan' => 'required',
            'deskripsi' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect::back()->withErrors($validator)->withInput($request->all());
        }
        $i = [
            'jk' => $request->jk,
            'namaperusahaan' => $request->namaperusahaan,
            'kategori' => $request->kategori,
            'pendidikan' => $request->pendidikan,
            'jam' => $request->jam,
            'tempatperusahaan' => $request->tempatperusahaan,
            'deskripsi' => $request->deskripsi,
        ];
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar')->store('inputdata/' . time());
            $i['gambar'] = $file;
        }
        InputdataModel::where('id', $id)->update($i);

        return redirect('/inputdata')->with('succes', 'Berhasil tambah');
    }

    public function destroy(string $id)
    {

        InputdataModel::where('id', $id)->delete();
        return redirect('/inputdata')->with('success', 'Berhasil hapus data');
    }
}

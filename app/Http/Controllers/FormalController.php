<?php

namespace App\Http\Controllers;

use App\Helper\GlobalHelper;
use App\Models\FormalModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class FormalController extends Controller
{
    public function index()
    {
        return view('front.cvats.pages.pendidikan.formal.index');
    }


    public function create()
    {
        $x['tkn'] = FormalModel::select('tingkatansekolah')->pluck('tingkatansekolah')->toArray();
        $x['glr'] = FormalModel::select('gelar')->pluck('gelar')->toArray();
        $x['f'] = FormalModel::where('id_user', Auth::id())->first();
        return view('front.cvats.pages.pendidikan.formal.tambah', $x);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'tingkatansekolah'  => 'required',
            'namasekolah' => 'required',
            'jurusan' => 'required',
            'tanggalmulai' => 'required',
            'tanggalselesai' => 'required',
            'gelar' => 'required',
            'IPK' => 'required',
            'deskripsi' => 'required',

        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $x = FormalModel::updateOrCreate([
            'id_user' => Auth::id(),
        ], [
            'tingkatansekolah' => $request->tingkatansekolah,
            'namasekolah' => $request->namasekolah,
            'jurusan' => $request->jurusan,
            'tanggalmulai' => $request->tanggalmulai,
            'tanggalselesai' => $request->tanggalselesai,
            'gelar' => $request->gelar,
            'IPK' => $request->IPK,
            'deskripsi' => $request->deskripsi,
            'id_user' => Auth::id(),
            'id_user' => Auth::id(),

        ]);
        GlobalHelper::messagereturn($x);
        return redirect('/formal')->with('ss', 'berhasil tambah');
    }

    public function show(string $id)
    {
        $data['edit'] = FormalModel::where('id', $id)->first();
        return view('front.cvats.pages.formal.edit', $data);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'tingkatansekolah'  => 'required',
            'namasekolah' => 'required',
            'Jurusan' => 'required',
            'tanggalmulai' => 'required',
            'tanggalselesai' => 'required',
            'gelar' => 'required',
            'IPK' => 'required',
            'deskripsi' => 'required',

        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        FormalModel::where('id', $id)->update([
            'id' => $request->idformal,
            'tingkatansekolah' => $request->tingkatansekolah,
            'namasekolah' => $request->namasekolah,
            'jurusan' => $request->jurusan,
            'tanggalmulai' => $request->tanggalmulai,
            'tanggalselesai' => $request->tanggalselesai,
            'gelar' => $request->gelar,
            'IPK' => $request->IPK,
            'deskripsi' => $request->deskripsi,
            'id_user' => Auth::id(),
        ]);
        return redirect('/formal')->with('success', 'Berhasil edit ');
    }

    public function destroy(string $id)
    {
        FormalModel::where('id', $id)->delete();
        return redirect('/formal')->with('success', 'Berhasil hapus data');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\SkillModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    public function index()
    {
        $data['skill'] = SkillModel::get();
        return view('front.cvats.pages.skill.index', $data);
    }

    public function create()
    {
        $data['bdg'] = SkillModel::select('bidang')->pluck('bidang')->toArray();
        $data['bgn'] = SkillModel::select('bagian')->pluck('bagian')->toArray();
        $data['s'] = SkillModel::where('id_user', Auth::id())->first();
        return view('front.cvats.pages.skill.tambah', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bidang' => 'required',
            'bagian' => 'required',
            'ahli' => 'required',
            'deskripsi' => 'required',

        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        SkillModel::updateOrCreate([
            'id_user' => Auth::id(),
        ], [
            'bidang' => $request->bidang,
            'bagian' => $request->bagian,
            'ahli' => $request->ahli,
            'deskripsi' => $request->deskripsi,
            'id_user' => Auth::id(),
        ]);
        return redirect('/skill')->with('ss', 'Berhasil tambah ');
    }

    public function show(string $id)
    {
        $data['edit'] = SkillModel::where('id', $id)->first();
        return view('front.cvats.pages.skill.edit', $data);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'bidang' => 'required',
            'bagian' => 'required',
            'ahli' => 'required',
            'deskripsi' => 'required',

        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        SkillModel::where('id', $id)->update([
            'id' => $request->idskill,
            'bidang' => $request->bidang,
            'bagian' => $request->bagian,
            'ahli' => $request->ahli,
            'deskripsi' => $request->deskripsi,
            'id_user' => Auth::id(),
        ]);
        return redirect('/skill')->with('success', 'Berhasil edit ');
    }

    public function destroy(string $id)
    {
        SkillModel::where('id', $id)->delete();
        return redirect('/skill')->with('success', 'Berhasil hapus data');
    }
}

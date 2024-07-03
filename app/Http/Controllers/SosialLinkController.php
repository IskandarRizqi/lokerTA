<?php

namespace App\Http\Controllers;

use App\Models\SosialLinkModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class SosialLinkController extends Controller
{
    public function index()
    {
        $data['sosiallink'] = SosialLinkModel::get();
        return view('front.cvats.pages.sosiallink.index', $data);
    }

    public function create()
    {
        $x['s'] = SosialLinkModel::where('id_user', Auth::id())->first();
        return view('front.cvats.pages.sosiallink.tambah', $x);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'facebook' => 'required',
            'instagram' => 'required',
            'tiktok' => 'required',
            'linkedin' => 'required',

        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        SosialLinkModel::updateOrCreate([
            'id_user' => Auth::id(),
        ], [
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'tiktok' => $request->tiktok,
            'linkedin' => $request->linkedin,
            'id_user' => Auth::id(),
        ]);
        return redirect('/sosiallink')->with('ss', 'Berhasil tambah ');
    }

    public function show(string $id)
    {
        $data['edit'] = SosialLinkModel::where('id', $id)->first();
        return view('front.cvats.pages.sosiallink.edit', $data);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'facebook' => 'required',
            'instagram' => 'required',
            'tiktok' => 'required',
            'linkedin' => 'required',

        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        SosialLinkModel::where('id', $id)->update([
            'id' => $request->idsosiallink,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'tiktok' => $request->tiktok,
            'linkedin' => $request->linkedin,
            'id_user' => Auth::id(),
        ]);
        return redirect('/sosiallink')->with('success', 'Berhasil edit ');
    }

    public function destroy(string $id)
    {
        SosialLinkModel::where('id', $id)->delete();
        return redirect('/sosiallink')->with('success', 'Berhasil hapus data');
    }
}

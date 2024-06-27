<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{

    public function index()
    {
        $x['data'] = User::where('id', Auth::user()->id)->first();
        return view('front.profile.userdetail', $x);
    }

    public function store(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'id' => 'required',
            'nama' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput($r->all());
        }

        $inp = [
            'name' => $r->nama
        ];
        if ($r->password) {
            $inp['password'] = bcrypt($r->password);
        }

        if ($r->gambar) {
            $file = $r->file('gambar')->store('profile/' . time());
            $inp['gambar'] = $file;
        }
        $u = User::where('id', $r->id)->update($inp);
        return Redirect::back()->with('info', 'Data Tersimpan');
    }
}

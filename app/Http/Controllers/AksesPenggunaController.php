<?php

namespace App\Http\Controllers;

use App\Helper\GlobalHelper;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AksesPenggunaController extends Controller
{
    public function index()
    {
        $data['users'] = user::get();
        return view('admin.pages.user.index', $data);
    }

    public function create()
    {
        $x['edit'] = false;
        return view('admin.pages.user.tambahpengguna', $x);
    }

    public function store(Request $request)
    {

        $validator = validator::make($request->all(), [


            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect::back()->withErrors($validator)->withInput($request->all());
        }

        if (!$request->id && !$request->password) {
            return redirect::back()->withInput($request->all())->with('info', 'Password wajib diisi');
        }

        $i = [
            'uid' => Str::uuid(),
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id
        ];

        if ($request->password) {
            $i['password'] = Hash::make($request->password);
        }

        $user = User::updateOrCreate([
            'id' => $request->id
        ], $i);

        GlobalHelper::messagereturn($user);
        return redirect('/aksespengguna');
    }

    public function show(string $id)
    {
        $data['edit'] = User::where('id', $id)->first();
        return view('admin.pages.user.tambahpengguna', $data);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {

        $validator = validator::make($request->all(), [

            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect::back()->withErrors($validator)->withInput($request->all());
        }

        $i = [
            'id' => $request->idusers,
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,

        ];
        if ($request->password) {
            $i['password'] = Hash::make($request->password);
        }

        User::where('id', $id)->update($i);

        return redirect('/aksespengguna')->with('succes', 'Berhasil tambah');
    }

    public function destroy(string $id)
    {

        User::where('id', $id)->delete();
        return redirect('/aksespengguna')->with('success', 'Berhasil hapus data');
    }
}

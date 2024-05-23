<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data['users'] = User::leftJoin('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
        //     ->leftJoin('roles', 'roles.id', '=', 'model_has_roles.role_id')
        //     ->get(['users.*', 'roles.name as rolename']);
        // return $data;
        return view('admin.pages.user.datauser');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['role'] = Role::get();
        return view('admin.pages.user.tambahpengguna', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        setPermissionsTeamId(0);
        $role = Role::where('id', $request->role)->first();
        // return $role['name'];


        $permission = DB::table('role_has_permissions')
            ->where('role_id', $request->role)
            ->pluck('permission_id')
            ->toArray();
        $user = User::create([
            'name' => $request->nama,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'active' => 1
        ]);

        $user->syncRoles([$role['name'], $role['name']]);
        $user->givePermissionTo($permission);
        return redirect('/data-pengguna')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['users'] = User::leftJoin('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
            ->leftJoin('roles', 'roles.id', '=', 'model_has_roles.role_id')
            ->where('users.id', $id)
            ->first(['users.*', 'roles.name as rolename', 'roles.id as roleid']);
        $data['role'] = Role::get();

        // return $data;

        return view('pages.user.editusers', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        // response error validation
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        setPermissionsTeamId(0);
        $role = Role::where('id', $request->role)->first();
        $permission = DB::table('role_has_permissions')
            ->where('role_id', $request->role)
            ->pluck('permission_id')
            ->toArray();
        $user = User::where('id', $id)->first();
        if (isset($request->oldrole)) {
            if ($user->hasRole([$request->oldrole]) == 1) {
                $user->removeRole($request->oldrole);
                $user->assignRole($role['name']);
                DB::table('model_has_permissions')->where('model_id', $id)->delete();
                $user->givePermissionTo($permission);
                // return $user->getPermissionsViaRoles();
            }
        } else {
            $user->assignRole($role['name']);
            $user->givePermissionTo($permission);
        }

        if ($request->password == null) {
            $user = User::where('id', $id)->update([
                'name' => $request->nama,
                'email' => $request->email,
            ]);
        } else {
            $user = User::where('id', $id)->update([
                'name' => $request->nama,
                'password' => Hash::make($request->password),
                'email' => $request->email,
            ]);
        }
        // DB::table('model_has_roles')->where('model_id', $id)->delete();

        // $user->syncRoles($role['id']);
        return redirect('/data-pengguna')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect('/data-pengguna')->with('success', 'Data berhasil dihapus');
    }
}

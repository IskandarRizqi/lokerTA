<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AksesPenggunaController extends Controller
{
    public function index()
    {
        $data['users']= user::get();
        return view('admin.pages.user.index', $data);
    }

    public function create()
    {
        return view('admin.pages.user.tambahpengguna');
    }

    public function store(Request $request)
    {
      
            $validator = validator::make($request->all(), [
               
                
                'name'=> 'required',
                'email'=> 'required',
                'password'=> 'required',
                'role_id'=> 'required',
                
            ]);

            if ($validator->fails()) {
                return redirect::back()->withErrors($validator)->withInput($request->all());
            }
       
            $user = User::create([
                'uid'=>Str::uuid(),
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'role_id' => $request->role_id
            ]);
    
        

                return redirect('/aksespengguna')->with('ss', 'Berhasil tambah');
     

        
    }

    public function show(string $id)
    {
        $data['edit'] = User::where('id', $id)->first();
        return view('admin.pages.user.edit',$data);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
     
            $validator = validator::make($request->all(), [
               
                'name'=> 'required',
                'email'=> 'required',
                'password'=> 'required',
                'role_id'=> 'required',
               
            ]);
            if ($validator->fails()) {
                return redirect::back()->withErrors($validator)->withInput($request->all());
            }
           
            User::where('id', $id)->update([
                'id' => $request->idusers,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'role_id' => $request->role_id,
              
            ]);

                return redirect('/aksespengguna')->with('succes', 'Berhasil tambah');
        
    }

    public function destroy(string $id)
    {
    
        User::where('id', $id)->delete();
        return redirect('/aksespengguna')->with('success', 'Berhasil hapus data');
    }


}

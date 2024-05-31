<?php

namespace App\Http\Controllers;

use App\Models\AksesPenggunaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class AksesPenggunaController extends Controller
{
    public function index()
    {
        $data['aksespengguna']= AksesPenggunaModel::get();
        return view('admin.pages.user.index', $data);
    }

    public function create()
    {
        return view('admin.pages.user.tambahpengguna');
    }

    public function store(Request $request)
    {
      
            $validator = validator::make($request->all(), [
               
                
                'nama'=> 'required',
                'email'=> 'required',
                'password'=> 'required',
                'role'=> 'required',
                
            ]);

            if ($validator->fails()) {
                return redirect::back()->withErrors($validator)->withInput($request->all());
            }
            AksesPenggunaModel::create([
                'id' => $request->idaksespengguna,
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => $request->password,
                'role' => $request->role,
            ]);

                return redirect('/aksespengguna')->with('ss', 'Berhasil tambah');
     

        
    }

    public function show(string $id)
    {
        $data['edit'] = AksesPenggunaModel::where('id', $id)->first();
        return view('admin.pages.user.edit',$data);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
     
            $validator = validator::make($request->all(), [
               
                'nama'=> 'required',
                'email'=> 'required',
                'password'=> 'required',
                'role'=> 'required',
               
            ]);
            if ($validator->fails()) {
                return redirect::back()->withErrors($validator)->withInput($request->all());
            }
           
            AksesPenggunaModel::where('id', $id)->update([
                'id' => $request->idaksespengguna,
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => $request->password,
                'role' => $request->role,
              
            ]);

                return redirect('/aksespengguna')->with('succes', 'Berhasil tambah');
        
    }

    public function destroy(string $id)
    {
    
        AksesPenggunaModel::where('id', $id)->delete();
        return redirect('/aksespengguna')->with('success', 'Berhasil hapus data');
    }


}

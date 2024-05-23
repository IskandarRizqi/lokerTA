<?php

namespace App\Http\Controllers;

use App\Models\KriteriaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class FormKriteriaController extends Controller
{
    
    public function index()
    {
        $data['kriteria']= KriteriaModel::get();
        return view('front.pages.formkriteria', $data);
    }

    public function create()
    {
       
    } 

    public function store(Request $request)
    {
     

            $validator = Validator::make($request->all(), [
               
            
                'jk'=> 'required',
                'bidang'=> 'required',
                'lokasi'=> 'required',
                'pendidikan'=> 'required',
                'jam'=> 'required',
            ]);

            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput($request->all());
            }
            KriteriaModel::create([
                'id' => $request->idkriteria,
               
                'jk' => $request->jk,
                'bidang' => $request->bidang,
                'lokasi' => $request->lokasi,
                'pendidikan' => $request->pendidikan,
                'jam' => $request->jam,
    
            ]);

                return redirect('/kriteria')->with('ss', 'Berhasil tambah');
     

       
                
    }

    public function show(string $id)
    {
     
    }

    public function edit(string $id)
    {
        //
    }

    public function update()
    {
     
      
    }

    public function destroy()
    {
    
    
    }
}

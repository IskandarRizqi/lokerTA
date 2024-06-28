<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class TemplateController extends Controller
{
    public function index()
    {
        
       $data['informasipribadi']=DB::table('informasipribadi')
       ->join('provinsis', 'provinsis.id',  'informasipribadi.provinsi')
       ->join('kabupatens', 'kabupatens.id', 'informasipribadi.kota_kab')
       ->join('kecamatans', 'kecamatans.id',  'informasipribadi.kecamatan')
       ->join('kelurahans', 'kelurahans.id', 'informasipribadi.kelurahan')
       ->select('informasipribadi.*', 'provinsis.nama as prov', 'kabupatens.nama as kab', 'kecamatans.nama as kec', 'kelurahans.nama as kel')
      ->latest()->first();
       $data['pengalaman']=DB::table('pengalaman')->get();
       $data['formal']=DB::table('formal')->latest()->first();
       $data['nonformal']=DB::table('nonformal')->get();
       $data['skill']=DB::table('skill')->get();
       $data['sosiallink']=DB::table('sosiallink')->latest()->first();
       
        // return($data);
        return view('front.cvats.pages.preview.template',$data);
    }
}

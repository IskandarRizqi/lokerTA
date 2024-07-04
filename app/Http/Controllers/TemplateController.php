<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class TemplateController extends Controller
{
    public function index()
    {

        $data['informasipribadi'] = DB::table('informasipribadi')
            ->join('provinsis', 'provinsis.id',  'informasipribadi.provinsi')
            ->join('kabupatens', 'kabupatens.id', 'informasipribadi.kota_kab')
            ->join('kecamatans', 'kecamatans.id',  'informasipribadi.kecamatan')
            ->join('kelurahans', 'kelurahans.id', 'informasipribadi.kelurahan')
            ->select('informasipribadi.*', 'provinsis.nama as prov', 'kabupatens.nama as kab', 'kecamatans.nama as kec', 'kelurahans.nama as kel')
            ->where('informasipribadi.id_user', Auth::id())
            ->first();
        $data['pengalaman'] = DB::table('pengalaman')->where('id_user', Auth::id())->get();
        $data['formal'] = DB::table('formal')->where('id_user', Auth::id())->first();
        $data['nonformal'] = DB::table('nonformal')->where('id_user', Auth::id())->get();
        $data['skill'] = DB::table('skill')->where('id_user', Auth::id())->get();
        $data['sosiallink'] = DB::table('sosiallink')->where('id_user', Auth::id())->first();

        // return($data);
        return view('front.cvats.pages.preview.template', $data);
    }

    public function srt()
    {
        // $x['l'] = 
        return view('front.templsuratlamaran');
    }
}

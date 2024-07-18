<?php

namespace App\Http\Controllers;

use App\Models\InputdataModel;
use App\Models\KriteriaModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class TemplateController extends Controller
{
    public function index(Request $request)
    {
        $id = Auth::id();
        if ($request->user_id) {
            $id = $request->user_id;
        }
        $data['informasipribadi'] = DB::table('informasipribadi')
            ->join('provinsis', 'provinsis.id',  'informasipribadi.provinsi')
            ->join('kabupatens', 'kabupatens.id', 'informasipribadi.kota_kab')
            ->join('kecamatans', 'kecamatans.id',  'informasipribadi.kecamatan')
            ->join('kelurahans', 'kelurahans.id', 'informasipribadi.kelurahan')
            ->select('informasipribadi.*', 'provinsis.nama as prov', 'kabupatens.nama as kab', 'kecamatans.nama as kec', 'kelurahans.nama as kel')
            ->where('informasipribadi.id_user', $id)
            ->first();
        $data['pengalaman'] = DB::table('pengalaman')->where('id_user', $id)->get();
        $data['formal'] = DB::table('formal')->where('id_user', $id)->first();
        $data['nonformal'] = DB::table('nonformal')->where('id_user', $id)->get();
        $data['skill'] = DB::table('skill')->where('id_user', $id)->get();
        $data['sosiallink'] = DB::table('sosiallink')->where('id_user', $id)->first();

        if (
            !$data['informasipribadi'] ||
            !$data['pengalaman'] ||
            !$data['formal'] ||
            !$data['nonformal'] ||
            !$data['skill'] ||
            !$data['sosiallink']
        ) {
            return Redirect::back()->with('info', 'data tidak lengkap, harap isi data terlebih dahulu');
        }
        // return($data);
        return view('front.cvats.pages.preview.template', $data);
    }

    public function srt(Request $request)
    {
        $data['perusahaan'] = '';
        $data['kota_perusahaan'] = '';
        $data['kategori_perusahaan'] = '';
        $data['tanggal_lamar'] = Carbon::now();
        if ($request->loker_id) {
            $loker = InputdataModel::where('id', $request->loker_id)->first();
            $data['perusahaan'] = $loker ? $loker->namaperusahaan : '';
            $data['kota_perusahaan'] = $loker ? $loker->tempatperusahaan : '';
            $data['kategori_perusahaan'] = $loker ? $loker->kategori : '';
            $data['tanggal_lamar'] = $loker ? $loker->created_at : Carbon::now();
            // return $loker;
        }
        $data['informasipribadi'] = DB::table('informasipribadi')
            ->join('provinsis', 'provinsis.id',  'informasipribadi.provinsi')
            ->join('kabupatens', 'kabupatens.id', 'informasipribadi.kota_kab')
            ->join('kecamatans', 'kecamatans.id',  'informasipribadi.kecamatan')
            ->join('kelurahans', 'kelurahans.id', 'informasipribadi.kelurahan')
            ->select('informasipribadi.*', 'provinsis.nama as prov', 'kabupatens.nama as kab', 'kecamatans.nama as kec', 'kelurahans.nama as kel')
            ->where(function ($q) use ($request) {
                if ($request->user_id) {
                    return $q->where('informasipribadi.id_user', $request->user_id);
                }
                return $q->where('informasipribadi.id_user', Auth::id());
            })
            ->first();
        $data['user'] = KriteriaModel::where(function ($q) use ($request) {
            if ($request->kriteria_id) {
                return $q->where('id', $request->kriteria_id);
            }
            return $q->where('id', Auth::user()->kriteria_id);
        })->first();
        if (
            !$data['informasipribadi'] ||
            !$data['user']
        ) {
            return Redirect::back()->with('info', 'data tidak lengkap, harap isi data terlebih dahulu');
        }
        return view('front.templsuratlamaran', $data);
    }
}

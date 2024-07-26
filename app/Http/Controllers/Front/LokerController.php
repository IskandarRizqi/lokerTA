<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\InputdataModel;
use App\Models\LamaranModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LokerController extends Controller
{
    public function detailloker($id, Request $r)
    {
        if (!$id) {
            return Redirect::back()->with('info', 'Data Tidak Ditemukan');
        }
        $x = [];
        $x['loker'] = InputdataModel::where('id', $id)->first();
        $x['terbaru'] = InputdataModel::where('id', '!=', $id)
            ->orderBy('created_at', 'ASC')
            ->limit(5)
            ->get();
        return view('front.detail_loker', $x);
    }

    public function submitloker($id)
    {
        $auth = Auth::user();
        if (!$auth) {
            return Redirect::to('/')->with('info', 'Silahkan login terlebih dahulu');
        }

        $auth = User::where('id', $id)->with('kriteria')->first();
        if (!$auth->kriteria) {
            return Redirect::back()->with('info', 'Silahkan isi data diri terlebih dahulu');
        }

        $check = LamaranModel::where('loker_id', $id)->where('user_id', Auth::id())->first();
        if ($check) {
            return Redirect::back()->with('info', 'Lamaran sudah terkirim');
        }

        $lamar = LamaranModel::create([
            'loker_id' => $id,
            'user_id' => Auth::id(),
        ]);
        if ($lamar) {
            return Redirect::back()->with('info', 'Lamaran berhasil terkirim');
        }
        return Redirect::back()->with('info', 'Lamaran gagal terkirim');
    }
}

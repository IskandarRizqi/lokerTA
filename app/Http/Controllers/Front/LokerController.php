<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\FormalModel;
use App\Models\InformasiPribadiModel;
use App\Models\InputdataModel;
use App\Models\LamaranModel;
use App\Models\NonFormalModel;
use App\Models\PengalamanModel;
use App\Models\SkillModel;
use App\Models\SosialLinkModel;
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

        $infpbd = InformasiPribadiModel::where('id_user', Auth::id())->first();
        if (!$infpbd) {
            return Redirect::to('/informasipribadi')->with('info', 'Silahkan isi data diri terlebih dahulu');
        }
        $skill = SkillModel::where('id_user', Auth::id())->first();
        if (!$skill) {
            return Redirect::to('/skill')->with('info', 'Silahkan isi skill terlebih dahulu');
        }
        $pnglmn = PengalamanModel::where('id_user', Auth::id())->first();
        if (!$pnglmn) {
            return Redirect::to('/pengalaman')->with('info', 'Silahkan isi pengalaman terlebih dahulu');
        }
        $pdk = FormalModel::where('id_user', Auth::id())->first();
        if (!$pdk) {
            return Redirect::to('/formal')->with('info', 'Silahkan isi pendidikan formal terlebih dahulu');
        }
        $non = NonFormalModel::where('id_user', Auth::id())->first();
        if (!$non) {
            return Redirect::to('/nonformal')->with('info', 'Silahkan isi pendidikan non formal terlebih dahulu');
        }
        $sosial = SosialLinkModel::where('id_user', Auth::id())->first();
        if (!$sosial) {
            return Redirect::to('/sosiallink')->with('info', 'Silahkan isi sosial link terlebih dahulu');
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

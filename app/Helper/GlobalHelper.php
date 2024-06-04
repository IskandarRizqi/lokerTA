<?php

namespace App\Helper;

use App\Models\InputdataModel;
use App\Models\User;

class GlobalHelper
{
    public static function getrecomend($id)
    {
        // $loker = InputdataModel::select()
        // ->where('kategori', $auth->kriteria->bidang)
        // ->where('jam', $auth->kriteria->jam)
        // ->where('tempatperusahaan', $auth->kriteria->lokasi)
        // ->where('pendidikan', $auth->kriteria->pendidikan)
        // ->where('jk', $auth->kriteria->jk)
        // ->get();

        $data = [];

        $l = InputdataModel::select()
            ->orderBy('created_at', 'ASC')
            ->get();
        $jmlloker = count($l);

        if (!$id) {
            return $l;
        }
        $auth = User::where('id', $id)->with('kriteria')->first();

        $l0 = [];
        $l1 = [];
        $l2 = [];
        $l3 = [];
        $l4 = [];
        $l5 = [];
        $c = 0;
        foreach ($l as $key => $v) {
            if ($auth->kriteria->bidang == $v->bidang) {
                if (count($l1) <= 3) {
                    array_push($l1, $v);
                    $c++;
                }
            }
            if ($auth->kriteria->lokasi == $v->tempatperusahaan) {
                if (count($l3) <= 2) {
                    array_push($l3, $v);
                    $c++;
                }
            }
            if ($auth->kriteria->pendidikan == $v->pendidikan) {
                if (count($l4) <= 2) {
                    array_push($l4, $v);
                    $c++;
                }
            }
            if ($auth->kriteria->jam == $v->jam) {
                if (count($l2) <= 2) {
                    array_push($l2, $v);
                    $c++;
                }
            }
            if ($auth->kriteria->jk == $v->jk) {
                if (count($l5) <= 2) {
                    array_push($l5, $v);
                    $c++;
                }
            }
            if ($c <= 6) {
                array_push($l0, $v);
            }
        }

        foreach ($l1 as $key => $value) {
            array_push($data, $value);
        }
        foreach ($l2 as $key => $value) {
            array_push($data, $value);
        }
        foreach ($l3 as $key => $value) {
            array_push($data, $value);
        }
        foreach ($l4 as $key => $value) {
            array_push($data, $value);
        }
        foreach ($l5 as $key => $value) {
            array_push($data, $value);
        }
        foreach ($l0 as $key => $value) {
            array_push($data, $value);
        }
        return $data;
    }
}

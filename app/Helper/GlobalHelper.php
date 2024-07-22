<?php

namespace App\Helper;

use App\Models\InputdataModel;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Sastrawi\Stemmer\StemmerFactory;
use Sastrawi\StopWordRemover\StopWordRemoverFactory;

class GlobalHelper
{
    public static function preprocess($text)
    {
        $stemmerFactory = new StemmerFactory();
        $stemmer = $stemmerFactory->createStemmer();

        $stopWordRemoverFactory = new StopWordRemoverFactory();
        $stopWordRemover = $stopWordRemoverFactory->createStopWordRemover();

        $text = strtolower($text);
        $text = $stopWordRemover->remove($text);
        $text = $stemmer->stem($text);

        return $text;
    }

    public static function cosineSimilarity($vec1, $vec2)
    {
        $dotProduct = array_sum(array_map(function ($a, $b) {
            return $a * $b;
        }, $vec1, $vec2));
        $magnitude1 = sqrt(array_sum(array_map(function ($x) {
            return pow($x, 2);
        }, $vec1)));
        $magnitude2 = sqrt(array_sum(array_map(function ($x) {
            return pow($x, 2);
        }, $vec2)));

        if ($magnitude1 * $magnitude2 == 0) {
            return 0;
        } else {
            return $dotProduct / ($magnitude1 * $magnitude2);
        }
    }
    public static function getrecomend($id)
    {
        $data = [];

        $l = InputdataModel::select()
            ->orderBy('created_at', 'ASC')
            ->get();

        if (!$id) {
            return $l;
        }
        $auth = User::where('id', $id)->with('kriteria')->first();
        if (!$auth->kriteria) {
            // return $l;
            return [];
        }

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
            // if ($c <= 6) {
            //     array_push($l0, $v);
            // }
        }



        foreach ($l1 as $key => $value) {
            if (count($data) <= 6) {
                foreach ($data as $k => $v) {
                    if ($v->id !== $value->id) {
                        array_push($data, $value);
                    }
                }
            }
        }
        foreach ($l2 as $key => $value) {
            if (count($data) <= 6) {
                foreach ($data as $k => $v) {
                    if ($v->id !== $value->id) {
                        array_push($data, $value);
                    }
                }
            }
        }
        foreach ($l3 as $key => $value) {
            if (count($data) <= 6) {
                foreach ($data as $k => $v) {
                    if ($v->id !== $value->id) {
                        array_push($data, $value);
                    }
                }
            }
        }
        foreach ($l4 as $key => $value) {
            if (count($data) <= 6) {
                foreach ($data as $k => $v) {
                    if ($v->id !== $value->id) {
                        array_push($data, $value);
                    }
                }
            }
        }
        foreach ($l5 as $key => $value) {
            if (count($data) <= 6) {
                foreach ($data as $k => $v) {
                    if ($v->id !== $value->id) {
                        array_push($data, $value);
                    }
                }
            }
        }
        // foreach ($l0 as $key => $value) {
        //     if (count($data) <= 6) {
        //         array_push($data, $value);
        //     }
        // }
        return $data;
    }

    public static function messagereturn($bool)
    {
        if ($bool) {
            return Alert::success('Success', 'Berhasil');
        }
        return Alert::info('Info', 'Tidak Berhasil');
    }
}

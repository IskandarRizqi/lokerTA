<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaModel extends Model
{
    use HasFactory;

    protected $table = "kriteria";
    protected $fillable = [
        'jk',
        'bidang',
        'lokasi',
        'pendidikan',
        'jam',
        'user_id',

    ];
}

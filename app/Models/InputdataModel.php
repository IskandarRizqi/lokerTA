<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InputdataModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "inputdata";
    protected $fillable = [
        'gambar',
        'jk',
        'namaperusahaan',
        'kategori',
        'pendidikan',
        'jam',
        'tempatperusahaan',
        'email',
        'gaji',
        'deskripsi',

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputdataModel extends Model
{
    use HasFactory;

    protected $table = "inputdata";
    protected $fillable = [
        'gambar',
        'jk',
        'namaperusahaan',
        'kategori',
        'pendidikan',
        'jam',
        'tempatperusahaan',
        'deskripsi',
      
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPribadiModel extends Model
{
    use HasFactory;
    protected $table = "informasipribadi";
    protected $fillable = [
        'gambar',
        'nama',
        'email',
        'no_hp',
        'no_wa',
        'provinsi',
        'kota_kab',
        'kelurahan',
        'rt',
        'rw',
        'detailalamat',
        'deskripsi',
        'kecamatan',
        
      
    ];
}

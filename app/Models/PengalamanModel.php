<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanModel extends Model
{
    use HasFactory;

    protected $table = "pengalaman";
    protected $fillable = [
        'perusahaan',
        'posisikerja',
        'kota',
        'negara',
        'tanggalmulai',
        'tanggalselesai',
        'deskripsi',
     
    ];


}

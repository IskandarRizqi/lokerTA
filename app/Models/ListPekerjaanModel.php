<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPekerjaanModel extends Model
{
    use HasFactory;
    protected $table = 'list_pekerjaan';
    protected $fillable = [
        'uid',
        'nama_pekerjaan',
        // 'nama_pemilik_rekening',
        'deskripsi',

        'created_at',
        'updated_at',
        'deleted_at',
    ];
}

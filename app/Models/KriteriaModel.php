<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaModel extends Model
{
    use HasFactory;

    protected $table = "inputdata";
    protected $fillable = [
        'jk',
        'bidang',
        'lokasi',
        'pendidikan',
        'jam',
      
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AksesPenggunaModel extends Model
{
    use HasFactory;

    protected $table = "aksespengguna";
    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
        
      
    ];
}

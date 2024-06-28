<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class LamaranModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'loker_id',
        'user_id',
        'status'
    ];

    public function loker(): HasOne
    {
        return $this->hasOne(InputdataModel::class, 'id', 'loker_id');
    }

    public function users(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class conexaobd extends Model
{
    protected $fillable = [
        'nome',
        'preco',
        'marca'
    ];
}

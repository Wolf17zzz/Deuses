<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deus extends Model
{
    use HasFactory;

    protected $table = "deuses";


    protected $fillable = [
        'nome',
        'poderes',
        'idade',
        'sexo',
        'arma',
        'animal',
        'filiação'
    ];
}

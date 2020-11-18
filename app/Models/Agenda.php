<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'rua',
        'bairro',
        'cidade',
    ];
}

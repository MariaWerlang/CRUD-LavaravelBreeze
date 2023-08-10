<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'nome',
        'endereco',
        'bairro',
        'cep',
        'cidade',
        'estado',
    ];

    protected $table = 'clientes';

    use HasFactory;
}

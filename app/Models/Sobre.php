<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sobre extends Model
{
    protected $fillable = [
        'textoSobre',
        'endereco',
        'telefone',
        'email',
        'sitePessoal',
    ];
}

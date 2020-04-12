<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rodape extends Model
{
    protected $fillable = [
        'textoSobre',
        'endereco',
        'telefone',
        'email',
        'sitePessoal',
    ];
}

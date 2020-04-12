<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'assunto',
        'conteudo'
    ];
}

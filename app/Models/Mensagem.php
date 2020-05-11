<?php

namespace App\Models;

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

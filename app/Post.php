<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{   
    use SoftDeletes;

    protected $fillable = [
        'titulo',
        'autor',
        'palavrasChave',
        'categoria',
        'conteudo',
        'imagem',
        'destaque'
    ];

    public function comentarios() 
    {
        return $this->hasMany('App\Comentario');
    }
}

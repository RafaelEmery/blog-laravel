<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'post_id',
        'autor',
        'conteudo'
    ];

    public function post() 
    {
        return $this->belongsTo('App\Post', 'post_id');
    }
}

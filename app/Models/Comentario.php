<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'post_id',
        'autor',
        'email',
        'conteudo'
    ];

    public function post() 
    {
        return $this->belongsTo('App\Models\Post', 'post_id');
    }
}

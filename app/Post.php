<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{   
    use SoftDeletes;

    protected $fillable = [
        'titulo',
        'subtitulo',
        'autor',
        'palavrasChave',
        'categoria',
        'conteudo',
        'imagem',
        'destaque'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function getCustomDestaqueAttribute()
    {    
        return $this->destaque ? '<p class="text-success">Sim</p>' : '<p class="text-danger">Não</p>';
    }

    public function getCustomDateAttribute()
    {   
        return $this->created_at->format('d/m/y');
    }

    public function scopeCategoria($query, $categoria)
    {
        return $query->where('categoria', $categoria);
    }

    public function comentarios() 
    {
        return $this->hasMany('App\Comentario');
    }
}

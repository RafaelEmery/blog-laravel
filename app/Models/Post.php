<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

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

    //Metodos para o slug
    public static function boot()
    {
        parent::boot();

        static::saving(function ($post) {
            $post->slug = Str::slug($post->titulo, '-');
        });
    }

    public function getRouteKeyName()
    {
        return 'titulo';
    }

    //Accessors para exibir dados
    public function getCustomDestaqueAttribute()
    {    
        return $this->destaque ? '<p class="text-success">Sim</p>' : '<p class="text-danger">Não</p>';
    }

    public function getCustomDateAttribute()
    {   
        return $this->created_at->format('d/m/y');
    }

    //Scope para filtro
    public function scopeCategoria($query, $categoria)
    {
        return $query->where('categoria', $categoria);
    }

    //Relacionamento One to Many
    public function comentarios() 
    {
        return $this->hasMany('App\Models\Comentario');
    }
}

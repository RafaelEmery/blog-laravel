<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => 'required|min:10',
            'subtitulo' => 'required|min:10',
            'autor' => 'required',
            'palavrasChave' => 'required',
            'categoria' => 'required',
            'conteudo' => 'required|min:180',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'Escreva o título do Post!',
            'titulo.min' => 'O título deve possui mais que 10 letras!',
            'subtitulo.required' => 'Escreva o subtítulo do Post!',
            'subtitulo.min' => 'O subtítulo deve possui mais que 10 letras!',
            'autor.required' => 'Escreva o autor do Post!',
            'palavrasChave.required' => 'Escreva as palavras chave do Post!',
            'categoria.required' => 'Seleciona a categoria do Post!',
            'conteudo.required' => 'Escreva o conteúdo do Post!',
            'conteudo.min' => 'Seu texto está muito pequeno. Escreva mais ou vá para o Twitter!',
        ];
    }
}

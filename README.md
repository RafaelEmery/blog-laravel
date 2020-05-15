## Sobre o projeto

Consiste em um projeto pessoal de um blog no qual o usuário pode fazer diversas modificações no conteúdo do site, tais quais: criar, consultar, atualizar e deletar posts, e editar informações contidas no site. Em outras palavras, pode ser considerado como um CMS (sistema de gestão de conteúdo).

## Instalando e rodando o projeto

Primeiro, clone este repositório para a sua máquina

````
git clone https://github.com/RafaelEmery/blog-laravel.git
````

Após isso, talvez você precise rodar os seguintes comandos na pasta do projeto:

````
composer update

cp .env.example .env

php artisan key:generate
````

Para ele funcionar localmente:

````
php artisan serve
````
Para rodar as migrações:

````
php artisan migrate
```` 

Para popular as tabelas:

````
php artisan db:seed
````

## Algumas das boas práticas e recursos do Laravel usados

A ideia do projeto é basicamente conseguir aplicar conceitos e boas praticas novas em um projeto real, para que o aprendizado seja fixado. Abaixo, temos alguns exemplos e aprendizados obtidos neste projeto.

#### Factories e Seeders
Usadas em todas as tabelas para gerar registros falsos de teste. Foi usada a biblioteca [Faker](https://github.com/fzaninotto/Faker) e parte dos dados foram gerados em Português.

#### Accessors
Usados para exibir dados diferentes de como estão registrados no Banco de Dados:

````
//Retorna a data de criação em outro formato
public function getCustomDateAttribute() {   
	return $this->created_at->format('d/m/y');
}

//Na view, será chamada como
{{ $post->custom_date }}
````

#### Local Scopes
Usados para fazer filtragens de postagens por categorias

````
//No Model Post.php
public function scopeCategoria($query, $categoria) {
	return $query->where('categoria', $categoria);
}

//Usando o Scope em PostController.php
$posts = Post::where(function($query) {
    if (request()->get('categoria')) {
        $query->categoria(request()->get('categoria'));
    }
})->get();
````

#### Requests
Usadas para fazermos a validação de objetos "fora do Controller". Veja:

````
//Método store em PostController
public function store(PostRequest $request) {
	...
}
````

#### Autênticação de usuário
Recurso nativo do Laravel para criarmos usuários e camadas de autênticação no sistema.

#### Relacionamento One To Many
Feito para a relação entre as postagens e comentários.

````
//Em Post.php
public function comentarios() {
    return $this->hasMany('App\Models\Comentario');
}

//Em Comentario.php
public function post() {
    return $this->belongsTo('App\Models\Post', 'post_id');
}
````

#### Soft Deletes
Recurso usado para, basicamente, recuperar registros deletados. As postagens deletadas irão para a Lixeira, onde podem ser restaurados ou deletados permanentemente.

````
//Em Post.php
use SoftDeletes

protected $dates = [
    'deleted_at'
];

//Em LixeiraController.php obtendo os registros deletados
$postsLixeira = Post::onlyTrashed()->get();
````

## URLs do projeto

Para o site, pode-se usar:
- *'/sobre'* para a página de "Sobre Nós";
- *'/contato'* para a página de Contato;
- *'/admin'* para logar ou acessar o sistema adminstrativo;

Para o sistema adminstrativo:
- *'/admin/posts'* para gerenciar as postagens;
- *'/admin/comentarios'* para consultar e deletar comentários;
- *'/admin/mensagens'* para consultar e deletar mensagens de Contato;
- *'/admin/sobre'* para cadastrar e alterar informações do "Sobre Nós"
- *'/admin/lixeira'* para restaurar ou deletar postagens;
- *'/admin/ajuda'* para a página de Ajuda;

## Blog

Na página inicial, temos uma listagem das postagens que estão no banco de dados. A primeira postagem sempre será a Destacada pelo usuário que administra o Blog e também existe a opção de realizar a listagem de acordo com sua categoria. 

![](/src_readme/Inicio.png)

## Post

Cada postagem possui uma imagem principal que fica ao fundo e a opção e exibição de comentários.

![](/src_readme/Post.png)

## Sistema Adminstrativo

A listagem é feita por meio de tabelas para as principais funcionalidades. Para o caso das postagens, existem cinco ações que o usuário pode tomar: criar, destacar, consultar, editar e enviar para a Lixeira.

![](/src_readme/SistAdmin.png)


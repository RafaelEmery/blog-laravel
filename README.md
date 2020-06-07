## About the blog

Basically, is a personal project using Laravel 6 and Bootstrap 4 which the user can do some basic operations at the blog content. The actions are: create, show, update and delete posts e creating/updating other informations. In other words, you can see this project as a CMS (Content Managment System).

<strong>The language of the blog is portuguese (pt-BR)</strong>

## Install and execute the blog

First of all, you have to clone this repo.

````
git clone https://github.com/RafaelEmery/blog-laravel.git
````

Then you might have to use the commands below to execute properly.

````
composer update

cp .env.example .env

php artisan key:generate
````

To execute in localhost.

````
php artisan serve
````

To migrate the database.

````
php artisan migrate
```` 

To seed the tables using Seeders and Faker

````
php artisan db:seed
````

## Some good practices and Laravel's hacks/tricks used

The objective of this project is to be able to apply some concepts and good practices/hacks to secure that i'm learning the right way to code with PHP and Laravel! See some examples:

#### Factories e Seeders
Applied in all Models and migrations to generate fake data for testing functions, methods and operations. I used the [Faker](https://github.com/fzaninotto/Faker) library and part of the data was generated in portuguese (pt-BR).

#### Accessors
Laravel resource used to show custom data:

````php
//Retorna a data de criação em outro formato
public function getCustomDateAttribute() {   
	return $this->created_at->format('d/m/y');
}

//Na view, será chamada como
{{ $post->custom_date }}
````

#### Local Scopes
Functions to search data and filter posts by category:

````php
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
Using the Laravel's Request class we can validate the requests "outside of the Controller". See:

````php
//Método store em PostController
public function store(PostRequest $request) {
	...
}
````

#### Authentication
Laravel package to authenticate users, create, read, update and delete users. It also haves some different functions like registering users and retrieving password but it wasn't applied in this project.

#### One To Many relationship
Used in the posts and comments relations.

````php
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
Basically, used to work with and restaure deleted posts. The deleted posts goes to the Trash (Lixeira) where they can be restaured or permanently deleted.

````php
//Em Post.php
use SoftDeletes

protected $dates = [
    'deleted_at'
];

//Em LixeiraController.php obtendo os registros deletados
$postsLixeira = Post::onlyTrashed()->get();
````

## Project's URLs/routes

In the frontend:
- *'/sobre'* for the Sobre Nós (About us) page;
- *'/contato'* for the Contato page;
- *'/admin'* to log in and access the system;

In the backend (admin system):
- *'/admin/posts'* to manage the posts;
- *'/admin/comentarios'* to see and delete the comments;
- *'/admin/mensagens'* to see and delete the Contato (contact message);
- *'/admin/sobre'* to create and update the "Sobre Nós" (About us) info;
- *'/admin/lixeira'* to restaure and deleted posts;
- *'/admin/ajuda'* to help's page (written in pt-BR);

## Blog
In the home page, there is a post list. The first post will always be the "flagged" post by the admin of the blog and the user can also filter the posts by category. 

![](/src_readme/Inicio.png)

## Post
Every post have a main image (in background), the post's stuffs and the form to comment and all the comments of that post.

![](/src_readme/Post.png)

## Admin system
The data are seen using data tables in the main parts of the system. In Post's data table, there are five actions to the user: create, flag, show details, edit and send to Trash (Lixeira).

![](/src_readme/SistAdmin.png)


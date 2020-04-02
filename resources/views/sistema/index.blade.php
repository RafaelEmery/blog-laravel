<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>  
    <h1>Teste de posts</h1>
    @foreach ($posts as $post)
        <h1> {{ $post->titulo }} </h1>
        <h2> {{ $post->autor }} </h2>
        <p>
            {{ $post->conteudo }}
        </p>
        <hr>
    @endforeach
    <h1>Fim dos posts</h1>
</body>
</html>
<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

$posts = [
[ 'id' => 1, 'title' => 'Primeiro Post', 'content' => 'Conteúdo do meu primeiro post.' ],
[ 'id' => 2, 'title' => 'Aprendendo Laravel', 'content' => 'Laravel é um framework incrível para
PHP.' ],
];

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () use ($posts) {
    return view('posts', ['posts' => $posts]);
});

Route::get('/posts/{id}', function ($id) use ($posts) {
    if (!isset($posts[$id])) {
        abort(404, 'Post não encontrado');
    }
    return view('post_detalhe', ['post' => $posts[$id]]);
});

Route::get('/posts/create', function () {
    return view('create_post');
});

Route::post('/posts', function (Request $request) use (&$posts) {
    $id = count($posts) + 1;
    $posts[$id] = [
        'id' => $id,
        'titulo' => $request->input('titulo'),
        'conteudo' => $request->input('conteudo')
    ];

    return redirect('/posts');
});
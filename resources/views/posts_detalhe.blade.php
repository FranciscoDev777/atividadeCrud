<!DOCTYPE html>
<html>
<head>
    <title>{{ $post['titulo'] }}</title>
</head>
<body>
    <h1>{{ $post['titulo'] }}</h1>
    <p>{{ $post['conteudo'] }}</p>
    <a href="{{ url('/posts') }}">Voltar</a>
</body>
</html>

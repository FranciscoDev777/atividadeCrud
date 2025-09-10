<!DOCTYPE html>
<html>
<head>
    <title>Criar Post</title>
</head>
<body>
    <h1>Novo Post</h1>
    <form action="{{ url('/posts') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label><br>
        <input type="text" name="titulo" id="titulo"><br><br>

        <label for="conteudo">Conteúdo:</label><br>
        <textarea name="conteudo" id="conteudo"></textarea><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>

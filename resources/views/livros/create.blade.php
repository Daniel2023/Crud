<!doctype html>
<h1 class="text-center">Crud</h1><hr>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width,initial-scale=1">
        <title> Cadastrar novo Livro</title>
        <style>
            label{
                float: left;
                display: block;
                width: 90px;
            }
        </style>
    </head>
    <body>
        @yield('content')
        <form action="{{ route ('salvar_livro') }}"method="post">
            @csrf
            <div><label for="isbn">ISBN</label><input type="text" name="isbn" id="isbn"></div>
            <div><label for="nome">Nome</label><input type="text" name="nome" id="nome"></div>
            <div><label for="custo">Autor</label><input type="text" name="autor" id="autor"></div>
            <div><label for="preco">Preço</label><input type="text" name="preco" id="preco"></div>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>

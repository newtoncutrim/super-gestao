<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro 404 - Página não encontrada</title>
    <link rel="stylesheet" href="{{asset('css/erro.css')}}">
</head>
<body>
    <div class="error-container">
        <h1>Erro 404</h1>
        <p>Desculpe, a página que você está procurando não foi encontrada.</p>
        <a href="{{route('site.index')}}">Voltar para a página inicial</a>
    </div>
</body>
</html>

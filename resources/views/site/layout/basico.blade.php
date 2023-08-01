<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('title')</title>
        <meta charset="utf-8">
    </head>
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">

    <body>
        @include('site.layout.header')
        @yield('conteudo')
    </body>
</html>
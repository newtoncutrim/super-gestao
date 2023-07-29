<h1>sintaxe</h1>

<h2>comentarios</h2>
{{--comentario blade--}}
@php
    //este é um comentário de uma linha.
    /*
    comentario de multiplas linhas
    */
@endphp

<h2>if se for verdadeiro</h2>
@if (true)
    <p>esta certo</p>
@endif

<h2>unless se nao for verdadeiro</h2>
@unless (!true)
    <p>teste</p>
@endunless

<h2></h2>
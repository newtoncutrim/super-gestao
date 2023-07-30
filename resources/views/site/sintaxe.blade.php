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

<h2>se for setado isset</h2>

@isset($nome)
    <p>ola setado {{$nome}}</p>
@endisset

<h2>se nao existir valor empyt</h2>
{{-- se tiver valor ele nao exibe --}}
@empty($semValor)
    <p> variavel sem valor</p>
@endempty

<h2>ternario</h2>
@php
    $nome ? 'sim' : 'nao';
@endphp


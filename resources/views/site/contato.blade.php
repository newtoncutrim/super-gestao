@extends('site.layout.basico')

@section('conteudo')
@section('title', 'Contato')



<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">
            <x-contatoForm classe='borda-preta'>
                Assim que informada nossa equipe entrará em contato!
            </x-contatoForm>
        </div>
    </div>  
</div>
@include('site.layout.footer')
@endsection
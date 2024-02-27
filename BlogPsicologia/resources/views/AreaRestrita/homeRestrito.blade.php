@extends('layouts.defaultAreaRestrita')

@section('css')
    <link rel="stylesheet" href={{ asset('css/botao.css') }}>
    <link rel="stylesheet" href={{ asset('css/homeAr.css') }}>
@endsection

@section('content')

<div class="row"> 
    <div class="col-6">
        <div><!-- Botão para telas pequenas -->
            <button class="btn btn-lg btn-custon">Adicionar novo post</button>
        </div>
    </div>
    <div class="col-6">
        <div class="d-flex flex-row-reverse">
            <div class="input-container">
                <input type="text" class="input-text" placeholder="Pesquisar...">
                <i class="fas fa-search search-icon"></i>
            </div>
        </div>
    </div>
</div>

@endsection
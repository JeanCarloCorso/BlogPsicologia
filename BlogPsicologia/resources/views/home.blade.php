@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href={{ asset('css/home.css') }}>
@endsection

@section('foraContainer')

<div class="background-container">
    <div class="text-container">
        <div class="title-container">
            <h1 class="title">Bem-vindo ao meu Blog</h1>
        </div>
        <div class="bar"></div>
        <p class="subtitle">Siga-me para aprender como <br/>ser um blogueiro</p>
        <div class="bar"></div>
    </div>
</div>

@endsection

@section('content-fluid')

<div class="custon-bloco">
    <h3>ARTIGOS MAIS RECENTES</h3>
    <hr class="custon">
    <div class="row g-3 justify-content-center custon-row">
        @for ($i = 1; $i <= 4; $i++)
            @include('includes.posts')
        @endfor
    </div>
</div>

@include('includes.sobremim')

@include('includes.contato')

@endsection


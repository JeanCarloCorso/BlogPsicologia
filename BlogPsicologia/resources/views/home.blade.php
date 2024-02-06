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

@section('content')

<div class="custon-bloco">
    <h3>ARTIGOS MAIS RECENTES</h3>
    <hr class="custon">
    <div class="row g-3 justify-content-center custon-row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-6">
            <div class="row g-3 justify-content-center">
                <a href="/" class="btn mt-2 d-flex align-items-center">
                    <div class="col-6">
                        <div class="card text-center bg-light">
                            <img src="/site/img/homeBackground.png" class="card-img-top">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column ml-3 text-left">
                            <span class="custom-span truncar-1l">TITULO DO ARTIGO</span>
                            <span class="custom-span span-resumo">Resumo do artigo com no máximo 5 linhas de texto. Caso não haja um resumo, as 5 primeiras linhas do artigo serão exibidas aqui.</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>


        <div class="col-xl-6 col-lg-6 col-md-6 col-6">
            <div class="row g-3 justify-content-center">
                <a href="/" class="btn mt-2 d-flex align-items-center">
                    <div class="col-6">
                        <div class="card text-center bg-light">
                            <img src="/site/img/homeBackground.png" class="card-img-top">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column ml-3 text-left">
                            <span class="custom-span truncar-1l">TITULO DO ARTIGO</span>
                            <span class="custom-span span-resumo">Resumo do artigo com no máximo 5 linhas de texto. Caso não haja um resumo, as 5 primeiras linhas do artigo serão exibidas aqui.</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
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
        <div class="col-xl-6 col-lg-6 col-md-12 col-12 com-margem">
            <div class="row g-3 justify-content-center">
                <a href="/" class="btn mt-2 d-flex">
                    <div class="col-5">
                        <div class="card text-center bg-light">
                            <img class="custom-img" src="/site/img/homeBackground.png">
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-6">
                        <div class="d-flex flex-column ml-3 text-left">
                            <span class="custom-span truncar-2l span-titulo">TITULO DO ARTIGO</span>
                            <span class="custom-span span-resumo truncar-6l">Resumo do artigo com no máximo 6 linhas de texto. Caso não haja um resumo, as 6 primeiras linhas do artigo serão exibidas aqui. Resumo do artigo com no máximo 6 linhas de texto. Caso não haja um resumo, as 6 primeiras linhas do artigo serão exibidas aqui. Resumo do artigo com no máximo 6 linhas de texto. Caso não haja um resumo, as 6 primeiras linhas do artigo serão exibidas aqui.</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-12 com-margem">
            <div class="row g-3 justify-content-center">
                <a href="/" class="btn mt-2 d-flex">
                    <div class="col-5">
                        <div class="card text-center bg-light">
                            <img class="custom-img" src="/site/img/homeBackground.png">
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-6">
                        <div class="d-flex flex-column ml-3 text-left">
                            <span class="custom-span truncar-2l span-titulo">TITULO DO ARTIGO</span>
                            <span class="custom-span span-resumo truncar-6l">Resumo do artigo com no máximo 6 linhas de texto. Caso não haja um resumo, as 6 primeiras linhas do artigo serão exibidas aqui. Resumo do artigo com no máximo 6 linhas de texto. Caso não haja um resumo, as 6 primeiras linhas do artigo serão exibidas aqui. Resumo do artigo com no máximo 6 linhas de texto. Caso não haja um resumo, as 6 primeiras linhas do artigo serão exibidas aqui.</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-12 com-margem">
            <div class="row g-3 justify-content-center">
                <a href="/" class="btn mt-2 d-flex">
                    <div class="col-5">
                        <div class="card text-center bg-light">
                            <img class="custom-img" src="/site/img/homeBackground.png">
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-6">
                        <div class="d-flex flex-column ml-3 text-left">
                            <span class="custom-span truncar-2l span-titulo">TITULO DO ARTIGO</span>
                            <span class="custom-span span-resumo truncar-6l">Resumo do artigo com no máximo 6 linhas de texto. Caso não haja um resumo, as 6 primeiras linhas do artigo serão exibidas aqui. Resumo do artigo com no máximo 6 linhas de texto. Caso não haja um resumo, as 6 primeiras linhas do artigo serão exibidas aqui. Resumo do artigo com no máximo 6 linhas de texto. Caso não haja um resumo, as 6 primeiras linhas do artigo serão exibidas aqui.</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-12 com-margem">
            <div class="row g-3 justify-content-center">
                <a href="/" class="btn mt-2 d-flex">
                    <div class="col-5">
                        <div class="card text-center bg-light">
                            <img class="custom-img" src="/site/img/homeBackground.png">
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-6">
                        <div class="d-flex flex-column ml-3 text-left">
                            <span class="custom-span truncar-2l span-titulo">TITULO DO ARTIGO</span>
                            <span class="custom-span span-resumo truncar-6l">Resumo do artigo com no máximo 6 linhas de texto. Caso não haja um resumo, as 6 primeiras linhas do artigo serão exibidas aqui. Resumo do artigo com no máximo 6 linhas de texto. Caso não haja um resumo, as 6 primeiras linhas do artigo serão exibidas aqui. Resumo do artigo com no máximo 6 linhas de texto. Caso não haja um resumo, as 6 primeiras linhas do artigo serão exibidas aqui.</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="custon-bloco2 justify-content-center">
    <br/>
    <h3>SOBRE MIM</h3>
    <hr class="custon">
    <br/>

    <div class="row g-3">
        <div class="col-xl-6 col-lg-6 col-md-12 col-12">
            <p class="custon">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce viverra ligula quis mauris malesuada, 
                a mollis purus finibus. Aliquam suscipit lorem ac libero placerat condimentum. Etiam pellentesque 
                sed nisl quis iaculis. Nunc metus neque, maximus non ipsum in, convallis dignissim ipsum. In ultricies 
                nisl dui, at sagittis arcu pretium eget. Nulla commodo ut turpis vitae mattis. Suspendisse et libero 
                augue. Donec eget tristique libero. 
            </p>
            <br/>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-12">
            <div>
                <img class="custom-img2" src="/site/img/homeBackground.png">
            </div>
            <br/>
        </div>

    </div>
</div>

@endsection


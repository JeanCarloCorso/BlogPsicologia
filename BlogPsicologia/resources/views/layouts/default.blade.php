<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset('site/bootstrap.min.css') }}> 
    <link rel="stylesheet" href={{ asset('css/layoutDefault.css') }}>
    @yield('css')

    <title>@yield('title', 'Uma Dose de Psicologia')</title>

    <link rel="icon" type="image/x-icon" href={{ asset('site/img/favicon/favicon.ico') }}>
    @yield('links')
    
</head>

<body style="background-color: #F9F9F9;">
    <!--navebar dispositivos grandes-->
    <nav class="navbar navbar-expand-lg navbar-dark border-bottom custom-nav shadow-sm mb-3 d-lg-block d-none">
        <div class="container">
            <a class="navbar-brand custom-navbar-brand" href="/">
                <img src="/site/img/logo/logo.png" alt="Logo" class="logo-image">
                <b>Uma Dose De Psicologia</b>
            </a>
            <div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link text-black">INÍCIO</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('meu_blog') }}" class="nav-link text-black">MEU BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sobre_mim') }}" class="nav-link text-black">SOBRE MIM</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--navebar dispositivos pequenos-->
    <nav class="navbar navbar-expand-lg navbar-dark border-bottom custom-nav shadow-sm mb-3 d-lg-none">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center w-100">
                <a class="menuHamburger" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <svg class="bi me-2" width="40" height="40" style="fill: black;">
                        <rect width="30" height="4" rx="2" style="fill: black;"></rect>
                        <rect y="10" width="30" height="4" rx="2" style="fill: black;"></rect>
                        <rect y="20" width="30" height="4" rx="2" style="fill: black;"></rect>
                    </svg>
                </a>
                <a class="navbar-brand custom-navbar-brand" href="/">
                    <img src="/site/img/logo/logo.png" alt="Logo" class="logo-image">
                    <b>Uma Dose De Psicologia</b>
                </a>
                <div></div>
            </div>
        </div>
    </nav>

    <!--Menu opções da nav para dispositivos pequenos-->
    <div id="navMobile" class="hidden">
        <button id="closeButton" onclick="closeNav()">
            <svg class="bi me-2" width="40" height="40" style="fill: white;">
                <use xlink:href="{{ asset('site\bootstrap-icons.svg#x') }}"/>
            </svg>
        </button>
        <ul>
            <li><a href="/">Início</a></li>
            <li><a href="{{ route('meu_blog') }}">Meu Blog</a></li>
            <li><a href="{{ route('sobre_mim') }}">Sobre Mim</a></li>
        </ul>
    </div>

    <div>
        @yield('foraContainer')
    </div>

    <div class="container">
        @yield('content')
    </div>
    <div class="container-fluid">
        @yield('content-fluid')
    </div>
  
    <footer class="border-top footer" style="background-color: #F9F9F9; color: black;">
        <div class="container">
            <div class="row py-3">
                <div class="slide1 col-12 col-md-4 text-center">
                    &copy; 2024 - Copyright CorsoSoftwares<br>
                </div>
                <div class="slide2 col-12 col-md-4 text-center">
                    <a href="/" class="text-decoration-none text-black">
                        Início
                    </a><br>
                    <a href="{{ route('meu_blog') }}" class="text-decoration-none text-black">
                        Meu Blog
                    </a><br>
                    <a href="{{ route('sobre_mim') }}" class="text-decoration-none text-black">
                        Sobre Mim
                    </a>
                </div>
                <div class="slide3 col-12 col-md-4 text-center">
                    <a href="{{ route('contato') }}" class="text-decoration-none text-black">
                        Contato pelo Site
                    </a><br>
                    E-mail: <a href="mailto:{{ config('app.email') }}" class="text-decoration-none text-black">
                        {{ config('app.email') }}
                    </a><br>
                    Telefone: <a href="tel:{{ config('app.telefone') }}" class="text-decoration-none text-black">
                        {{ config('app.telefone') }}
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src={{ asset('js/navPrincipal.js') }}></script>
    <script src={{ asset('site/bootstrap.bundle.js') }}></script>
</body>

</html>
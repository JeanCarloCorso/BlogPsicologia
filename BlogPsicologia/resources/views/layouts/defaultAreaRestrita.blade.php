<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset('site/bootstrap.min.css') }}> 
    <link rel="stylesheet" href={{ asset('css/layoutDefaultRestrito.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @yield('css')

    <title>@yield('title', 'Uma Dose de Psicologia')</title>

    <link rel="icon" type="image/x-icon" href={{ asset('site/img/favicon/favicon.ico') }}>
    @yield('links')
    
</head>

<body style="background-color: #F0F2F5;;">
    <nav class="navbar navbar-dark custom-nav shadow-sm mb-3 ">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center w-100">
                <a class="navbar-brand custom-navbar-brand" href="/">
                    <img src="/site/img/logo/logo.png" alt="Logo" class="logo-image">
                    <b>Uma Dose De Psicologia</b>
                </a>
                <div></div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
    <nav class="sidebar">
        <ul>
            <li><a href="{{ route('ar_posts') }}"><i class="fas fa-list"></i><span> Postagens</span></a></li>
            <li><a href="{{ route('ar_categorias') }}"><i class="fas fa-folder-open"></i><span> Categorias</span></a></li>
            <li><a href="{{ route('ar_escritores') }}"><i class="fas fa-pen-to-square"></i><span> Escritores</span></a></li>
            <li><a href="{{ route('ar_comentarios') }}"><i class="fas fa-comments"></i><span> Comentários</span></a></li>
            <li><a href="#"><i class="fas fa-envelope"></i><span> Mensagens</span></a></li>
            <li><a href="#"><i class="fas fa-lock"></i><span> Alterar Senha</span></a></li>
            <li><a href="#"><i class="fas fa-door-open"></i><span> Sair</span></a></li>
        </ul>
      <div class="bottom-arrow" onclick="toggleSidebar()">
        <i class="fas fa-angle-double-left"></i>
      </div>
    </nav>
    <div class="content">
      <!-- Conteúdo principal do site vai aqui -->
      @yield('content')
    </div>
  </div>
  
    <script src={{ asset('site/bootstrap.bundle.js') }}></script>
    <script src={{ asset('js/defaultAr.js') }}></script> 
</body>

</html>
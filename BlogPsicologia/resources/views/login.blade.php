@extends('layouts.default')

@section('title', 'Login')

@section('content')

<link rel="stylesheet" href={{ asset('css/login.css') }}>
<link rel="stylesheet" href={{ asset('css/botao.css') }}>

<div class="custon-bloco-start">
        <h1>Identifique-se, por favor</h1>
</div>

    <form class="col-sm-10 col-md-8 col-lg-6 mx-auto" method="post" action="{{ route('ar') }}">
        @csrf

        <div class="form-floating mb-3">
            <input type="email" id="txtEmail" class="form-control" name="email" placeholder=" " autofocus>
            <label for="txtEmail">E-mail</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" id="txtSenha" class="form-control" name="password" placeholder=" ">
            <label for="txtSenha">Senha</label>
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" value="" id="chkLembrar">
            <label for="chkLembrar" class="form-check-label">Lembrar de mim</label>
        </div>

        <button type="submit" class="btn btn-lg btn-custon w-100">Entrar</button>

        <p class="mt-3">
            Se tiver problemas ao efetuar login, entre em contato com o administrador do sistema!
        </p>

        <div class="notification-container top-right">
            @if ($errors->has('email'))
                <div class="error-notification larger">{{ $errors->first('email') }}</div>
            @endif
            @if ($errors->has('senha'))
                <div class="error-notification larger">{{ $errors->first('senha') }}</div>
            @endif
            @if ($errors->has('erroLogin'))
                <div class="error-notification larger">{{ $errors->first('erroLogin') }}</div>
            @endif
            @if ($errors->has('naoLogado'))
                <div class="error-notification larger">{{ $errors->first('naoLogado') }}</div>
            @endif
        </div>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    </form>
@endsection
@extends('layouts.defaultAreaRestrita')

@section('css')
    <link rel="stylesheet" href={{ asset('css/botao.css') }}>
    <link rel="stylesheet" href={{ asset('css/homeAr.css') }}>
    <link rel="stylesheet" href={{ asset('css/tabelas.css') }}>
@endsection

@section('content')

<div class="row"> 
    <div class="col-6">
        <h3>Lista de Comentários</h3>
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

<br/>

@php
    $comentarios = [
        (object) [
            'id' => 1,
            'pagina' => 'Teste de post',
            'nome' => 'João dos Santos',
            'email' => 'joao@gmail.com',
            'mensagem' => 'Achei muito relevante',
            'horario' => '09/10/2023 12:30:00 AM',
            'resposta' => null,
            'status' => true,
            'url'  => route('login'), 
        ],
        (object) [
            'id' => 2,
            'pagina' => 'Lorem ipsum',
            'nome' => 'Patolino Warner',
            'email' => 'patolino@email.com',
            'mensagem' => 'Podem questionar meus métodos, mas não podem questionar meus resultados.',
            'horario' => '10/11/2023 06:21:00 AM',
            'status' => FALSE,
            'resposta' => null,
            'url'  => route('login'), 
        ],
        (object) [
            'id' => 3,
            'pagina' => 'Lorem ipsum',
            'nome' => 'Poliana Sampaio',
            'email' => 'polianasampa@email.com',
            'mensagem' => 'Concordo plenamente',
            'horario' => '01/01/2024 11:10:00 AM',
            'status' => FALSE,
            'resposta' => 2,
            'url'  => route('login'), 
        ],
    ];
@endphp

<div class="row">
    <table>
        <thead>
            <tr>
                <th>Página</th>
                <th>Mensagem</th>
                <th>Hora</th>
                <th>Status</th>
                <th>Gerenciar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comentarios as $comentario)
                <tr class="clickable-row">
                    <td class="left">{{ $comentario->pagina }}</td>
                    <td class="left">
                        <b>Nome: </b> {{ $comentario->nome }} <br/>
                        <b>E-mail: </b> {{ $comentario->email }} <br/>
                        <b>Mensagem: </b> {{ $comentario->mensagem }} <br/>
                        @if($comentario->resposta != null)
                            <a href="#" class="ver-comentario ">Clique aqui para ver o comentário principal</a>
                        @endif
                    </td>
                    <td>{{ $comentario->horario }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn <?php echo ($comentario->status) ? 'btn-success' : 'btn-danger'; ?> dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo ($comentario->status) ? 'Aprovado' : 'Rejeitado'; ?>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Rejeitado</a>
                                <a class="dropdown-item" href="#">Aprovado</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <button class="btn btn-danger">Excluir</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src={{ asset('js/tabelas.js') }}></script>
@endsection
@extends('layouts.defaultAreaRestrita')

@section('css')
    <link rel="stylesheet" href={{ asset('css/botao.css') }}>
    <link rel="stylesheet" href={{ asset('css/homeAr.css') }}>
    <link rel="stylesheet" href={{ asset('css/tabelas.css') }}>
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

<br/>

@php
    $posts = [
        (object) [
            'id' => 1,
            'titulo' => 'Teste de post',
            'data' => '08/02/2024 08:05:00 PM',
            'url'  => route('login'), 
        ],
        (object) [
            'id' => 2,
            'titulo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'data' => '09/10/2023 12:30:00 AM',
            'url'  => route('login'),
        ],
    ];
@endphp

<div class="row">
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Data</th>
                <th>Gerenciar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr class="clickable-row" onclick="window.location='{{ $post->url }}';">
                    <td class="left">{{ $post->titulo }}</td>
                    <td>{{ $post->data }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-trigger" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i> Editar</a>
                                <a class="dropdown-item text-danger" href="#"><i class="fas fa-trash-alt"></i> Apagar</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var dropdownTriggers = document.querySelectorAll('.dropdown-trigger');

        dropdownTriggers.forEach(function(dropdownTrigger) {
            dropdownTrigger.addEventListener('click', function(event) {
                event.stopPropagation();
            });
        });
    });
</script>
@endsection
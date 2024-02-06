@extends('layouts.default')

@section('title', 'Confirmação de recebimento')

@section('content')
<link rel="stylesheet" href={{ asset('css/confirmacao.css') }}>
<link rel="stylesheet" href={{ asset('css/titulosSecao.css') }}>
</br>
</br>
</br>
</br>
    <div class="custon-bloco-start">
        <h3 class="custon">Confirmação de Recebimento</h3>
        <hr class="custon">
    </div>
    <p>
        Caro Leitor,
    </p>
    <p>
        Informamos que sua mensagem foi recebida com sucesso e
        que estarei respondendo o quanto antes possível. Para evitarmos problemas de comunicação, evite
        reenviar esta mesma mensagem dentro do prazo de 3 dias resposta.
    </p>
    <p>Agradeço pelo tempo empregado na leitura dos meus artigos.</p>

</br>
</br>
</br>
</br>
</br>
</br>
@endsection
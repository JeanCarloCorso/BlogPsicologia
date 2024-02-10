<link rel="stylesheet" href={{ asset('css/contato.css') }}>
<link rel="stylesheet" href={{ asset('css/titulosSecao.css') }}>
<link rel="stylesheet" href={{ asset('css/botao.css') }}>

<div class="row g-3 custon-row-sobre justify-content-center">
    <form class="col-sm-10 col-md-8 col-lg-6" method="post" >
        @csrf
        <div class="custon-bloco">
            <h3>CONTATO</h3>
            <hr class="custon">
            <br>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="nome" id="txtNomeCompleto" class="form-control" placeholder=" " autofocus>
            <label for="txtNomeCompleto">Nome Completo</label>
        </div>

        <div class="form-floating mb-3">
            <input type="email" id="txtEmail" name="email" class="form-control" placeholder=" ">
            <label for="txtEmail">E-mail</label>
        </div>

        <div class="form-floating mb-3">
            <textarea id="txtMensagem" name="mensagem" class="form-control" placeholder=" "
                style="height: 200px;"></textarea>
            <label for="txtMensagem">Mensagem</label>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-lg btn-custon w-100">Enviar Mensagem</button>
        </div>
    </form>
</div>

<script src={{ asset('js/contato.js') }}></script> 
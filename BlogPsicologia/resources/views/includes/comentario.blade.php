<link rel="stylesheet" href={{ asset('css/comentario.css') }}>
<link rel="stylesheet" href={{ asset('css/botao.css') }}>

<div class="card-comentario">
    <div class="card-body-comentario">
      <form>
        <div class="form-group mb-3">
          <textarea class="form-control" id="comment" rows="4" placeholder="Escreva seu comentário aqui" onclick="showFormItems()"></textarea>
        </div>
        <div id="form-items" class="form-hidden">
          <div class="row mb-3">
            <div class="col">
              <input type="text" class="form-control" placeholder="Seu Nome">
            </div>
            <div class="col">
              <input type="email" class="form-control" placeholder="Seu Email">
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-lg btn-custon">Enviar Comentário</button>
            <br/>
            <br/>
            <h6>* O e-mail não será publicado no site.<h6>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src={{ asset('js/comentario.js') }}></script> 
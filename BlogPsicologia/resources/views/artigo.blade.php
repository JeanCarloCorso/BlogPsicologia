@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href={{ asset('css/artigo.css') }}>
    <link rel="stylesheet" href={{ asset('css/titulosSecao.css') }}>
    <link rel="stylesheet" href={{ asset('css/botao.css') }}>
@endsection

@section('content')

<div class="artigo">
    <h2>TITULO GENÉRICO PARA UM BLOG GENÉRICO</h2>
    <hr class="custon">
    <br/>
    <P>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed purus nisi. In vel odio sed 
        justo auctor facilisis. Nam interdum nibh sed elit fringilla congue. Donec et ex sollicitudin, 
        pellentesque leo et, ornare felis. Mauris laoreet maximus congue. In mauris erat, sollicitudin quis 
        diam quis, tincidunt interdum lacus. Fusce semper, odio quis mollis tempor, nisi justo sollicitudin 
        dui, et euismod dui ipsum sed augue. Vestibulum et elit facilisis, dapibus mauris molestie, iaculis 
        mauris. In eros justo, blandit non elementum ut, ultrices tempor arcu. Nullam congue efficitur 
        ullamcorper. Praesent aliquet consectetur turpis eget sollicitudin. Donec ac dui porttitor, mollis enim 
        ut, volutpat mauris. Sed malesuada varius massa in varius. Maecenas vulputate magna ut eros pharetra, 
        et posuere erat pulvinar. Sed a eleifend ipsum. Morbi nec turpis ut erat molestie viverra eget vel nulla.
    </P>

    <P>
        Cras sit amet urna vitae dolor mattis interdum. Sed vulputate sem quis sapien efficitur sollicitudin. Proin 
        ac tellus et metus porta luctus. Cras ullamcorper risus leo, a porta mi gravida tempor. Ut auctor fringilla 
        aliquet. Suspendisse bibendum sodales molestie. Mauris quis sem nec enim vestibulum venenatis rutrum semper magna. 
        Donec porttitor sodales elit in ultrices.
    </P>

    <P>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed purus nisi. In vel odio sed 
        justo auctor facilisis. Nam interdum nibh sed elit fringilla congue. Donec et ex sollicitudin, 
        pellentesque leo et, ornare felis. Mauris laoreet maximus congue. In mauris erat, sollicitudin quis 
        diam quis, tincidunt interdum lacus. Fusce semper, odio quis mollis tempor, nisi justo sollicitudin 
        dui, et euismod dui ipsum sed augue. Vestibulum et elit facilisis, dapibus mauris molestie, iaculis 
        mauris. In eros justo, blandit non elementum ut, ultrices tempor arcu. Nullam congue efficitur 
        ullamcorper. Praesent aliquet consectetur turpis eget sollicitudin. Donec ac dui porttitor, mollis enim 
        ut, volutpat mauris. Sed malesuada varius massa in varius. Maecenas vulputate magna ut eros pharetra, 
        et posuere erat pulvinar. Sed a eleifend ipsum. Morbi nec turpis ut erat molestie viverra eget vel nulla.
    </P>

    <P>
        Cras sit amet urna vitae dolor mattis interdum. Sed vulputate sem quis sapien efficitur sollicitudin. Proin 
        ac tellus et metus porta luctus. Cras ullamcorper risus leo, a porta mi gravida tempor. Ut auctor fringilla 
        aliquet. Suspendisse bibendum sodales molestie. Mauris quis sem nec enim vestibulum venenatis rutrum semper magna. 
        Donec porttitor sodales elit in ultrices.
    </P>
</div>

<br/>
<hr>
<br/>

<div class="row g-3 justify-content-center">
    <div class="col-xl-4 col-lg-4 col-md-6 col-12 mx-auto">
        <div class="card">
            <div class="card-img-container">
                <div class="date-square">
                    <div class="day">01</div>
                    <div class="month">Jan</div>
                </div>
                <img src="/site/img/homeBackground.png" class="card-img-top" alt="Imagem do Card">
            </div>
            <div class="card-body">
                <h5 class="card-title">Titulo artigo recomendado</h5>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
        <div class="card">
            <div class="card-img-container">
                <div class="date-square">
                    <div class="day">01</div>
                    <div class="month">Jan</div>
                </div>
                <img src="/site/img/homeBackground.png" class="card-img-top" alt="Imagem do Card">
            </div>
            <div class="card-body">
                <h5 class="card-title">Titulo artigo recomendado</h5>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
        <div class="card">
            <div class="card-img-container">
                <div class="date-square">
                    <div class="day">01</div>
                    <div class="month">Jan</div>
                </div>
                <img src="/site/img/homeBackground.png" class="card-img-top" alt="Imagem do Card">
            </div>
            <div class="card-body">
                <h5 class="card-title">Titulo artigo recomendado</h5>
            </div>
        </div>
    </div>
</div>

<br/>
<hr>
<h5>Comentários:</h3>

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

<br/>

<script src={{ asset('js/artigo.js') }}></script> 
@endsection
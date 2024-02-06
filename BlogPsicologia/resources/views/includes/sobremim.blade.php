@section('title', 'Sobre Mim')
<link rel="stylesheet" href={{ asset('css/sobremim.css') }}>
<link rel="stylesheet" href={{ asset('css/titulosSecao.css') }}>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                
            <div class="social-icons">
                <a href="{{ config('app.instagram') }}" target="_blank" class="instagram-icon"><i class="fa fa-instagram" ></i></a>
                <a href="{{ config('app.facebook') }}" target="_blank" class="facebook-icon"><i class="fa fa-facebook"></i></a>
                <a href="{{ config('app.linkedin') }}" target="_blank" class="linkedin-icon"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-12">
            <div>
                <img class="custom-img2" src="/site/img/homeBackground.png">
            </div>
            <br/>
        </div>

    </div>
</div>
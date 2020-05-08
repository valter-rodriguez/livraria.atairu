@section('home_carousel')

<!-- Main carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src={{ asset('img/slider1.jpg') }} alt="Primeiro slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src={{ asset('img/slider2.jpg') }} alt="Segundo slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src={{ asset('img/slider3.jpg') }} alt="Terceiro slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
<!-- End main carousel -->

<!-- Seção de novidades -->
@if(isset($novidades))
<section id="novidades">
  <h2>Novidades na loja</h2>
  <div class="slider one-time" id='novidades'>
    @foreach($novidades as $novidade)
    <div class="our-team">
      <div class="pic">
        <img src={{ $novidade->imagem }}>
      </div>
      <div class="team-content">
        <span class="title">{{ $novidade->nome }}</span>
        <span class="post">{{ $novidade->autor }}</span>
        <h4>R$ {{ $novidade->preco }}</h4>
      </div>
      <a href="/produto/{{ $novidade->id_produto }}"><button class='btn btn-outline-dark'>Ver mais</button></a>
    </div>
    @endforeach
  </div>
</section>
@endif

@stop
@extends('layouts.Plantilla')
@section('Titulo','Pagina Principal')
@section('Contenido')
<h1 class="display-1 text-center text-dark mt-4">Bienvenido a la Biblioteca</h1>
<div id="carouselExampleDark" class="carousel carousel-ligt slide w-100 container ">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{asset('imagenes/VENTA.jpg')}}" class="d-block w-100" >
        <div class="carousel-caption d-none d-md-block">
          <h5>Feria del Libro Antiguo y de Ocasión en la Alameda</h5>
          <a href="https://www.lavozdegalicia.es/noticia/vigo/vigo/2019/07/28/feria-libro-antiguo-ocasion-alameda/0003_201907V28C10993.htm"><p>https://www.lavozdegalicia.es/noticia/vigo/vigo/2019/07/28/feria-libro-antiguo-ocasion-alameda/0003_201907V28C10993.htm</p></a>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{asset('imagenes/LIBROS.jpg')}}" class="d-block w-100" >
        <div class="carousel-caption d-none d-md-block">
          <h5>6 novedades para septiembre en literatura infantil y juvenil</h5>
          <a href="https://2poelintra.wordpress.com/2020/09/03/6-novedades-para-septiembre-en-literatura-infantil-y-juvenil/"><p>https://2poelintra.wordpress.com/2020/09/03/6-novedades-para-septiembre-en-literatura-infantil-y-juvenil/</p></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('imagenes/WONDER.jpg')}}" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>NOTICIAS LITERARIAS: NOVEDADES, PRÓXIMAS PUBLICACIONES Y ADAPTACIONES.</h5>
          <a href="https://myworldbyreading.blogspot.com/2017/11/noticias-literarias-novedades-proximas.html"><p>https://myworldbyreading.blogspot.com/2017/11/noticias-literarias-novedades-proximas.html</p></a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
@endsection
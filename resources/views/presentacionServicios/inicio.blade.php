@extends('layouts.principal')

@section('content')
<div class="row justify-content-center align-items-center g-2">
    <div style="width: 100%;">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-interval="2000">
            <!-- Aquí 2000 representa el intervalo en milisegundos (2 segundos) entre cada cambio de imagen. Puedes ajustar este valor según tus necesidades. -->
            <div class="carousel-inner">
                @foreach ($images as $index => $image)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img src="{{ asset($image) }}" class="d-block w-100" alt="...">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>


<div class="mt-4">
  <div class="bienvenida">
    <div class="text-center">
      <label class="text-center mt-4"> Enamorate de cuidarte </label> <br>
    </div>
    <div class="text-center mt-2">
      <label class="text-center"> Bienvenidos a <label class="degradarPalabra">BONITA</label> Alta peluquería </label>
    </div>
  </div>
</div>


<div class="contenedor mt-4">
  <a href="/servicios/damas" class="boton-imagen mt-4">
    <img src="{{ asset('images/img/dama3.png') }}" alt="">
    <span class="texto-superpuesto bienvenida "><b>DAMAS</b></span>
  </a>

  <a href="/servicios/caballeros" class="boton-imagen mt-4">
    <img src="{{ asset('images/img/hombre1.png') }}" alt="">
    <span class="texto-superpuesto bienvenida"> <B>CABALLEROS</B> </span>
  </a>

  <a href="/servicios/maquillaje" class="boton-imagen mt-4">
    <img src="{{ asset('images/img/unas2.png') }}" alt="">
    <span class="texto-superpuesto bienvenida">  <B>UÑAS Y MAQUILLAJE</B></span>
  </a>
</div>
<br>
<div class="mt-4 text-center">
  <label class="bienvenida mt-2 degradarPalabra">Diseños Personalizados al gusto del cliente</label>
  <label class="letraMediana">Un poco de nuestro trabajo</label>
  <div class="row mt-4 ">
      <div class="col-md-4 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('images/img/unas3.jpg') }}" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/img/maquillaje.jpeg') }}" class="card-img-top" alt="...">
          </div>
      </div>
      <div class="col-md-4 col-sm-12">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/img/cabello.jpg') }}" class="card-img-top" alt="...">
          </div>
      </div>
  </div>
</div>
<br>
<div class="contenedorFoto mt-4 boton-imagen2 text-center">
  <img src="{{ asset('images/img/bannerInstalacion.png') }}" alt="">
  <span class="texto-superpuesto2  "> <b>TENEMOS AMPLIAS INSTALACIONES PARA SU COMODIDAD</b></span>
</div>


@endsection






  






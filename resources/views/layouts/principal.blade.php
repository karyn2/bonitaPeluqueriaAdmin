<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonita Peluquería</title>
    <!--BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--SCRIPTS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--CSS-->
    @vite(['resources/css/serviciosCss/inicio.css', 'resources/css/serviciosCss/principal.css' ])
    @vite(['resources/css/serviciosCss/damas.css' ])
</head>
<body>
<nav class="navbar navbar-expand-sm fondoNav ">
    <button class="navbar-toggler d-lg-none" type="button" onclick="toggleNavbar()">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div  id="navbar-collapse" class="collapse navbar-collapse 
     justify-content-center align-items-center" >
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link letrasBlancas" href="/inicio">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link letrasBlancas" href="/servicios/damas">Damas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link letrasBlancas" href="#">Caballeros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link letrasBlancas" href="#">Maquillaje</a>
            </li>
            <li class="nav-item">
                <a class="nav-link letrasBlancas" href="#">Citas</a>
            </li>
        </ul>
    </div>
</nav>
<div class="fixed-top">
        <div class="float-right">
            <div class="btn-group">
                <a class="whatsapp-icon botonIconos " data-title="Escríbenos" target="_blank" href="https://api.whatsapp.com/send?phone=573177599748&text=Me%20interesa%20agendar%20una%20cita" ><i class="fa fa-whatsapp"></i></a>
                <a class="whatsapp-icon botonIconos" data-title="Agenda una Cita" href="agendarCita" ><i class="fa fa-calendar-minus-o"></i></a>
                <a class="whatsapp-icon botonIconos" data-title="Llega con Google Maps" target="_blank"  href="https://www.google.com/maps/dir/0.8335312,-77.6360831/Bonita+Alta+Peluqueria/@0.8258295,-77.64011,19.5z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x8e296d5b50e631f3:0x1e37d968456fa711!2m2!1d-77.6396914!2d0.8256912?hl=es-419&entry=ttu" > <i class="fa fa-map-marker"></i></a>
            </div>
        </div>
    </div>
<div class="container mt-4 ">
    @yield('content')
    
</div>

<div class="text-center mt-4">
    <p class="letraMediana"> <b>Síguenos en nuestras redes sociales</b></p>
    <a class="whatsapp-icon botonFooter " target="_blank" href="https://api.whatsapp.com/send?phone=573177599748&text=Me%20interesa%20agendar%20una%20cita" ><i class="fa fa-whatsapp"></i></a>
    <a class="whatsapp-icon botonFooter " target="_blank" href="https://www.facebook.com/bonitaipiales" ><i class="fa fa-facebook"></i></a>
    <a class="whatsapp-icon botonFooter " target="_blank" href="https://www.instagram.com/bonita_ipiales/"><i class="fa fa-instagram"></i></a>
  
    <div class="text-white mt-4">
          <p>
            <i class="fas fa-map-marked"></i> Carrera 6 #14-40, Ipiales &nbsp;&nbsp;
            <i class="fas fa-phone"></i> 317 759 97 48 &nbsp;&nbsp;
            <i class="fas fa-envelope"></i> bonitapeluqueria08@gmail.com 
            <br>
            OrangeSky-2023 Todos los derechos resevados
          </p>
    </div>
  </div>
</body>
</html>

<script>
    // Función para alternar la visibilidad de la barra de navegación colapsable
    function toggleNavbar() {
        var navbarCollapse = document.getElementById('navbar-collapse');
        navbarCollapse.classList.toggle('show');
    }
</script>
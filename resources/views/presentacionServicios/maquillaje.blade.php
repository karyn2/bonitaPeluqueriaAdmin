@extends('layouts.principal')

@section('content')
<div class="row justify-content-center align-items-center g-2">
    <img src=" {{ asset('images/img/maquillaje1.png') }}" alt="Damas" width="90%">
</div>
<div class="text-center text-white">
    <div class=" row mt-2 ">
        <div class="col-md-6 mt-4">
            <img src="{{asset('images/img/maquillaje2.jfif')}}" alt="Maquillaje" width="90%" height="85%" class="rounded-image hover-zoom">
        </div>
        <div class="col-md-6 text-center text-white">
            <br>
            <h2>MAKE UP</h2>
            <p class="textBlanco mt-4">
                Descubre un mundo de belleza y transformación en <b>Bonita</b> con nuestro servicio 
                de maquillaje excepcional. <br><br>
                Ya sea que estés preparándote para un evento especial, una 
                sesión de fotos o simplemente quieras realzar tu belleza cotidiana, nuestro equipo de 
                expertos maquilladores está aquí para hacer realidad tus sueños de maquillaje. Utilizando
                productos de alta calidad y técnicas vanguardistas, te brindamos un look personalizado 
                que resalta tus rasgos únicos y refleja tu estilo individual. <br> <br>
                En <b>Bonita</b>, no se trata solo de maquillaje, sino de empoderamiento y confianza.
                 Únete a nosotros y déjate
                llevar por la magia del maquillaje en manos de verdaderos artistas. <br> <br>
                <b class="text-center">
                    Tu belleza es nuestra
                    inspiración y tu satisfacción es nuestro compromiso.
                </b>
            </p>
           
        </div>
    </div>
    <div class=" row mt-2 ">
        <div class="col-md-6 text-center text-white">
            <br>
            <h2>MANICURE Y PEDICURE</h2>
            <p class="textBlanco mt-4">
                Sumérgete en el lujo y el cuidado absoluto en <b>Bonita</b> con nuestro servicio de 
                manicure y pedicure de primer nivel. Nuestras manos y pies merecen ser mimados, y es por 
                eso que hemos creado una experiencia diseñada para elevar tu belleza y bienestar. <br><br>
                Desde exquisitas manicuras que realzan tu estilo hasta relajantes pedicuras que revitalizan tus 
                pies cansados, nuestro talentoso equipo de especialistas trabaja con pasión y precisión 
                para brindarte un cuidado insuperable, con productos de alta calidad y un enfoque en la 
                higiene y el detalle, cada visita a <b>Bonita</b> se convierte en un momento de 
                indulgencia y renovación.  <br> <br>
                Descubre el poder de unas manos y pies radiantes, y déjanos ser tu
                destino de confianza para el cuidado personal definitivo.         
            </p>
        </div>
        <div class="col-md-6 mt-4">
            <img src="{{asset('images/img/manos1.png')}}" alt="Damas" width="85%" height="70%" class="rounded-image hover-zoom">
        </div>
    </div>

</div>

<div class="bodyDamas text-center text-white" style="margin-top:-9%">

    <h1 class="degradarPalabra">SERVICIOS</h1>
    <div class="row mt-4">
        <div class="col-md-4">
            <button class="w-100 animated-button d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" 
            onclick="mostrarContenido('contenido1')"><b>UÑAS</b></button>
        </div>
        <div class="col-md-4">
            <a class="w-100 animated-button d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" 
            onclick="mostrarContenido('contenido2')"><b>MAQUILLAJE</b></a>
        </div>
        <div class="col-md-4">
            <a class="w-100 animated-button d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" 
            onclick="mostrarContenido('contenido3')"><b>PRECIOS</b></a>
        </div>
    </div>

    <div id="contenido1" class="contenido">
        <br>
        <h2>SERVICIOS EN MANOS Y PIES</h2>
        <br>
        <div class="row mt-4 d-flex align-items-stretch">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/manos2.jfif')}}" class="card-img-top tamImagen" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>Limpieza</b> <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/manos3.jfif')}}"  class="card-img-top tamImagen" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>Esmaltado Básico</b> <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/manos4.jpg')}}" class="card-img-top tamImagen" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>Esmaltado Semipermanente</b> <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/manos5.jpg')}}" class="card-img-top tamImagen" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>Uñas en Acrílico Esculpidas</b> <br>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row mt-4 d-flex align-items-stretch">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/manos2.jfif')}}" class="card-img-top tamImagen" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>Uñas en Acrílico con Tips</b> <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/manos3.jfif')}}"  class="card-img-top tamImagen" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>Uñas en Gel</b> <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/manos4.jpg')}}" class="card-img-top tamImagen" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>Uñas en Poligel</b> <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/manos5.jpg')}}" class="card-img-top tamImagen" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>Uñas Press On</b> <br>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row mt-4 d-flex align-items-stretch">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/manos2.jfif')}}" class="card-img-top tamImagen" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>Recubrimiento de Acrílico sobre uña natural</b> <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/manos3.jfif')}}"  class="card-img-top tamImagen" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>Extensiones de Uñas</b> <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/manos4.jpg')}}" class="card-img-top tamImagen" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>Uñas Postizas</b> <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/manos5.jpg')}}" class="card-img-top tamImagen" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>Manicure para Caballero</b> <br>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>

    <div id="contenido2" class="contenido mt-4">
        <div class="text-center text-white mt-4">
        <h2 class="degradarPalabra">SERVICIOS DE MAQUILLAJE</h2>
        <br>
        <div class="row mt-4 d-flex align-items-stretch">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/maquillaje3.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>DÍA</b> <br>
                            Un maquillaje suave y natural que resalta la belleza natural de la persona.
                            Se centra en tonos neutros y sutiles realces.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/maquillaje5.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>NOCHE</b> <br>
                            Un estilo más audaz y dramático, con colores más intensos y definición. 
                            Puede incluir ahumados, delineados llamativos y labios más vibrantes.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/maquillaje4.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>FIESTA</b> <br>
                            Ideal para ocasiones especiales y eventos, este maquillaje a menudo presenta destellos,
                            brillos y colores festivos para un look festivo y radiante.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card cardColor textBlanco3" style="width: 16rem;">
                    <img src="{{asset('images/img/maquillaje6.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <b>NOVIAS Y QUINCEAÑERAS</b> <br>
                            Un maquillaje delicado y duradero diseñado para el día de la boda. 
                            Suele ser natural pero elegante, resaltando la belleza de la novia.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
    </div>

    <div id="contenido3" class="contenido">
        <div class="text-center text-white">
            <div class="row mt-4">
                <h2>LISTA DE PRECIOS</h2>
            </div>
            <h3 class="text-center mt-4">MANICURE</h3>
            <div class="row textBlanco2">
                <table>
                    @foreach ($manicure as $m)
                        <tr>
                            <td>
                                {{ $m->nombre_procedimiento }} 
                            </td>
                            <td>
                                $ {{ number_format($m->precio, 0, ',', '.') }}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <h3 class="text-center mt-4">MAQUILLAJE</h3>
            <div class="row textBlanco2">
                <table>
                    @foreach ($maquillaje as $m)
                        <tr>
                            <td>
                                {{ $m->nombre_procedimiento }} 
                            </td>
                            <td>
                                $ {{ number_format($m->precio, 0, ',', '.') }}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
                        
        </div>
    </div>
    
</div>

</div>

<script>
       function mostrarContenido(idContenido) {

        // Oculta todos los contenidos
        var contenidos = document.getElementsByClassName('contenido');
        for (var i = 0; i < contenidos.length; i++) {
            contenidos[i].classList.remove('visible');
        }

        // Muestra el contenido deseado
        var contenido = document.getElementById(idContenido);
        contenido.classList.add('visible');
    }
</script>



@endsection






  






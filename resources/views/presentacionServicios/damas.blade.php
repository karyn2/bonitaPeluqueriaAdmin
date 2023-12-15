@extends('layouts.principal')

@section('content')
<div class="row justify-content-center align-items-center g-2">
    <img src=" {{ asset('images/img/damaBaner.png') }}" alt="Damas" width="90%">
</div>

<div class="bodyDamas text-center text-white">
<div class=" row ">
        <div class="col-md-6 mt-4">
            <img src=" {{ asset('images/img/peinado1.jfif') }}" alt="Damas" width="100%" class="rounded-image hover-zoom">
        </div>
        <div class="col-md-6 text-center text-white">
            <br>
            <p class="textBlanco">
                ¡Bienvenida a nuestro exclusivo mundo de belleza y estilo para damas! En nuestra 
                peluquería, no solo creamos cortes de cabello, sino que esculpimos obras maestras 
                que reflejan tu personalidad y resaltan tu elegancia única. <br>
                 Nuestro equipo de estilistas 
                apasionados está dedicado a transformar cada hebra de tu cabello en una declaración de 
                moda audaz. Desde cortes vanguardistas que marcan tendencia hasta peinados clásicos que 
                nunca pasan de moda, te brindamos un abanico de opciones que harán que te sientas radiante 
                en cada ocasión. Permítenos mimarte con tratamientos de lujo, colores deslumbrantes y un 
                servicio que te hará sentir como la reina que eres. Entra a nuestro santuario de estilo y 
                déjanos realzar tu belleza interior y exterior de maneras que nunca imaginaste. Tu cabello, 
                tu estilo, tu esencia: aquí en nuestra peluquería, todo gira en torno a ti.
                
            </p>
        </div>
    </div>
    <h1 class="mt-4 degradarPalabra">SERVICIOS</h1>
    <br><br>
    <div class="row">
        <div class="col-md-2 col-sm-4 col-6">
            <button class="animated-button d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" 
            onclick="mostrarContenido('contenido1')"><b>LAVADO</b></button>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <a class="animated-button d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" 
            onclick="mostrarContenido('contenido2')"><b>PEINADOS</b></a>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <a class="animated-button d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" 
            onclick="mostrarContenido('contenido3')"><b>CORTES</b></a>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <a class="animated-button d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" 
            onclick="mostrarContenido('contenido4')"> <b>COLORACIÓN</b></a>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <a class="animated-button d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" 
            onclick="mostrarContenido('contenido5')"> <b>TRATAMIENTOS</b></a>
        </div>
        <div class="col-md-2 col-sm-4 col-6">
            <a class="animated-button d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" 
            onclick="mostrarContenido('contenido6')"> <b>LISTA DE PRECIOS</b></a>
        </div>
    </div>


    <div id="contenido1" class="contenido">
        <div class="text-center text-white">
            <div class=" row ">
                <div class="col-md-6 text-center text-white">
                    <br>
                    <h2>LAVADO</h2>
                    <p class="textBlanco mt-4">
                    <b>¡Descubre el lujo de un cuidado capilar excepcional en Bonita!</b> 
                    <br> <br>
                        Nuestro servicio de lavado va más allá de lo común, sumergiéndote en una experiencia
                        rejuvenecedora para tu cabello y tus sentidos. Cada gota de agua, cada masaje suave, se
                        combinan para ofrecerte un momento de indulgencia pura. <br> <br>
                        Imagina sentir cómo las tensiones del día se desvanecen mientras te entregas a las manos 
                        expertas de nuestros estilistas. Utilizando las marcas más prestigiosas de la industria, 
                        cada lavado es una obra de arte en sí misma, diseñada para realzar la vitalidad y el brillo
                        de tu cabello. Ven y sumérgete en un mundo de mimos y relajación con nuestro servicio de 
                        lavado, porque en <b>Bonita</b>, creemos que incluso los pequeños detalles pueden marcar
                        una gran diferencia en tu apariencia y bienestar. <br> <br>
                        <b class="text-center">¡Experimenta la perfección en cada hebra! </b>               
                    </p>
                </div>
                <div class="col-md-6 mt-4">
                    <img src="{{ asset('images/img/lavado1.jfif') }}" alt="Damas" width="90%" class="rounded-image hover-zoom">
                </div>
            </div>
        </div>
    </div>

    <div id="contenido2" class="contenido">
        <div class="text-center text-white">
            <h2 class="mt-4">PEINADOS</h2>
            <p style="font-size: 18px;">Descubre la magia de la transformación en <b>Bonita</b>, donde tus sueños de peinado se 
                hacen realidad.</p>
            <p class="textBlanco">
                Nuestro talentoso equipo de estilistas está listo para crear auténticas 
                obras maestras capilares que te harán deslumbrar en cada ocasión. Ya sea que busques un 
                look elegante y sofisticado o algo más atrevido y vanguardista, estamos aquí para realzar
                tu belleza única. En <b>Bonita</b>, no solo ofrecemos peinados, sino experiencias que
                te llenarán de confianza y te harán brillar. Únete a nosotros y déjanos hacer de cada día
                tu mejor día de cabello.
            </p>
            <div class="row mt-4">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/img/peinados5.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"> <b>NOVIAS</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center text-white">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/img/peinados4.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"> <b>XV AÑOS</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center text-white">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/img/peinados6.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><b>INFANTILES</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center text-white">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/img/peinados7.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><b>TRENZAS</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contenido3" class="contenido">
        <div class="text-center text-white">
            <div class=" row ">
                <div class="col-md-6 mt-4">
                    <img src="{{ asset('images/img/cortes1.png') }}" alt="Damas" width="90%" height="85%" class="rounded-image hover-zoom">
                </div>
                <div class="col-md-6 text-center text-white mt-4">
                    <br>
                    <h2>CORTES</h2>
                    <p class="textBlanco mt-4">
                        Tijeras afiladas, máquinas precisas y un toque único; en <b>BONITA</b>, el arte del Corte
                        cobra vida. <br> <br>
                        Nuestro equipo de expertos no solo corta el pelo, sino que crea una obra maestra que refleja 
                        tu estilo, sabemos que tu cabello es un accesorio que habla por sí mismo.
                        En el corazón del Team PRO de corte y peinado, la búsqueda de perfección es constante, 
                        estamos inmersos en las últimas técnicas y tendencias para asegurarnos de que tu corte sea 
                        vanguardista y fresco. <br> <br>
                        Permítenos ser tus guías en este viaje capilar. Cada profesional tiene el don de captar tus
                        deseos y transformarlos en un estilo práctico para tu día a día.
                        <br><br>
                        Nuestros cortes no son solo eso, son una expresión de tu identidad y una declaración de 
                        confianza. No dudes en confiar en nosotros para esculpir un corte que se ajuste a ti y a
                        tu rutina. <br> <br>
                        En <b>BONITA</b>, creemos que un corte no es solo una transformación capilar, es el
                        comienzo de una nueva actitud.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="contenido4" class="contenido">
        <div class="text-center text-white">
            <h2 class="mt-4">COLORACIÓN</h2>
            <p class="textBlanco">
                El servicio de color es un universo infinito dentro de nuestro salón.
                Nos perfeccionamos constantemente para poder abordar todas tus necesidades.
                Te asesoramos de una manera minuciosa para poder aconsejarte sobre qué es lo que tu cabello necesita. Cuáles son los pasos que llevara tu pelo para llegar al objetivo que deseas. Nuestra misión fundamental es mantener tu pelo sano y que luzca intacto, garantizamos tu felicidad absoluta.
                Como expresamos anteriormente, el universo de color es inmenso e infinito, por eso y para orientarte,
                te invitamos a que leas atentamente cada una de las descripciones de toda nuestra carta de servicios
                en color que tenemos para lograr satisfacer tus necesidades.
            </p>
            <div class="row mt-4">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/img/color1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"> <b>TINTES PLANOS</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center text-white">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/img/color2.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"> <b>RAYITOS</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center text-white">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/img/color4.png') }}"  class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><b>MECHAS</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center text-white">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/img/color5.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><b>CAMUFLAJE DE CANAS</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/img/color6.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"> <b>COLORES FANTASÍA</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center text-white">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/img/color7.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"> <b>DECOLORACIÓN GLOBAL</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center text-white">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/img/color8.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><b>CORRECCIÓN DE COLOR</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 text-center text-white">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/img/color3.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><b>BALAYAGE</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contenido5" class="contenido">
        <div class="text-center text-white">
            <div class=" row mt-4 ">
                <div class="col-md-6 text-center text-white">
                    <br>
                    <h2>TRATAMIENTOS PARA TU CABELLO</h2>
                    <p class="textBlanco mt-4">
                        Nuestros expertos capilares están listos para transformar tu melena en una obra de arte. 
                        Desde revitalizantes hidratantes hasta rejuvenecedores tratamientos de queratina, tenemos 
                        todo lo que tu cabello necesita. <br>             
                    </p>
                    <p style="text-align: left;">
                        <b style="font-size: 30px;">-</b> &nbsp;<b>KERATINA</b> <br>
                        <b style="font-size: 30px;">-</b> &nbsp;<b>BOTOX</b> <br>
                        <b style="font-size: 30px;">-</b> &nbsp;<b>CIRUGÍA CAPILAR</b> <br>
                        <b style="font-size: 30px;">-</b> &nbsp;<b>REPOLARIZACIÓN</b> <br>
                        <b style="font-size: 30px;">-</b> &nbsp;<b>HIDRATACIÓN</b> <br>
                        <b style="font-size: 30px;">-</b> &nbsp;<b>RECONSTRUCCIÓN CAPILAR</b> <br>
                    </p>
                </div>
                <div class="col-md-6 mt-4">
                    <img src="{{ asset('images/img/tratamiento1.jfif') }}" alt="Damas" width="80%" height="65%" class="rounded-image hover-zoom">
                </div>
            </div>
        </div>
    </div>

    <div id="contenido6" class="contenido">
        <div class="text-center text-white">
            <div class="row mt-4">
                <h2>LISTA DE PRECIOS</h2>
                <p class="textBlanco mt-2">
                    Los valores están sujetos a la aplicación de extras por largo y/o cantidad de cabello. Consultar
                    con nuestros profesionales antes de comenzar el trabajo en caso de presentar dudas. <br>

                    • En caso de optar por cambiar el lavado BONITA en aquellos servicios que lo tienen incluido, 
                    por otro lavado de nuestra lista se restará el valor del lavado BONITA del mismo, abonando la 
                    diferencia. <br>
                    
                    • En caso que el profesional lo requiera se adicionará profundidad. <br>
                    
                    • Si se realizara algún tratamiento, el valor del blowdry y lavado será restado si es 
                    combinado con algún servicio que ya lo posea incluido. <br>
                    
                    • El adicional por Olaplex, es exclusivo para los servicios
                    de coloración y decoloración. <br>
                    
                    • Los precios de coloración clásica no incluyen totalización.
                    
                </p>
            </div>
            <h3 class="text-center mt-4">CORTES Y PEINADOS</h3>
            <div class="row textBlanco2">
                <table>
                    @foreach ($cortes as $corte)
                        <tr>
                            <td>
                                {{ $corte->nombre_procedimiento }} 
                            </td>
                            <td>
                                $ {{ number_format($corte->precio, 0, ',', '.') }}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <h3 class="text-center mt-4">LAVADOS</h3>
            <div class="row textBlanco2">
                <table>
                    @foreach ($lavados as $lavado)
                        <tr>
                            <td>
                                {{ $lavado->nombre_procedimiento }} 
                            </td>
                            <td>
                                $ {{ number_format($lavado->precio, 0, ',', '.') }}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <h3 class="text-center mt-4">TRATAMIENTOS</h3>
            <div class="row textBlanco2">
                <table>
                    @foreach ($tratamientos as $tratamiento)
                        <tr>
                            <td>
                                {{ $tratamiento->nombre_procedimiento }} 
                            </td>
                            <td>
                                $ {{ number_format($tratamiento->precio, 0, ',', '.') }}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <h3 class="text-center mt-4">COLORACIÓN</h3>
            <div class="row textBlanco2">
                <table>
                    @foreach ($colores as $color)
                        <tr>
                            <td>
                                {{ $color->nombre_procedimiento }} 
                            </td>
                            <td>
                                $ {{ number_format($color->precio, 0, ',', '.') }}
                            </td>
                        </tr>
                    @endforeach
                </table>
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






  






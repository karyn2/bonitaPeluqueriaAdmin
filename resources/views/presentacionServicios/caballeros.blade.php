@extends('layouts.principal')

@section('content')
<div class="row justify-content-center align-items-center g-2">
    <img src=" {{ asset('images/img/banerCaballero.png') }}" alt="Damas" width="90%">
</div>

<div class="bodyDamas text-center text-white">
   
    <h1 class="mt-4 degradarPalabra">SERVICIOS</h1>
    <br><br>
    <div class="row">
        <div class="col-md-3 col-sm-4 col-6">
            <button class="animated-button d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" 
            onclick="mostrarContenido('contenido1')"><b>CORTES</b></button>
        </div>
        <div class="col-md-3 col-sm-4 col-6">
            <a class="animated-button d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" 
            onclick="mostrarContenido('contenido2')"><b>BARBA</b></a>
        </div>
        <div class="col-md-3 col-sm-4 col-6">
            <a class="animated-button d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" 
            onclick="mostrarContenido('contenido3')"><b>LAVADO</b></a>
        </div>
        <div class="col-md-3 col-sm-4 col-6">
            <a class="animated-button d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" 
            onclick="mostrarContenido('contenido4')"> <b>PRECIOS</b></a>
        </div>
    </div>

    <div id="contenido1" class="contenido">
    <div class="text-center text-white">
    <h2 class="mt-4">CORTES</h2>
    <p style="font-size: 18px;">Descubre la magia de la transformación en <b>Bonita</b>, donde tus cortes se 
        hacen realidad.</p>
    <p class="textBlanco">
        Nuestro talentoso equipo de estilistas está listo para crear auténticas 
        obras maestras capilares que te harán deslumbrar en cada ocasión. Ya sea que busques un 
        look elegante y sofisticado o algo más atrevido y vanguardista, estamos aquí para realzar
        tu belleza única. En <b>Bonita</b>, no solo ofrecemos cortes, sino experiencias que
        te llenarán de confianza y te harán brillar. Únete a nosotros y déjanos hacer de cada día
        tu mejor día de cabello.
    </p>
    <div class="row mt-4">
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="card hover-zoom" style="width: 16rem;">
                <img src= "{{ asset('images/img2/cortecesar.jpg') }}" class="card-img-top  " alt="...">
                <div class="card-body">
                    <p class="card-text"> <b>CORTE CESAR</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4 text-center text-white ">
            <div class="card hover-zoom" style="width: 16rem;">
                <img src="{{asset('images/img2/cortetexturizado.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"> <b>CORTE TEXTURIZADO</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4 text-center text-white">
            <div class="card hover-zoom" style="width: 16rem;">
                <img src="{{asset('images/img2/cortecombover.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><b>CORTE COMB OVER</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4 text-center text-white">
            <div class="card hover-zoom" style="width: 16rem;">
                <img src="{{asset('images/img2/cortepompadour.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><b>CORTE POMPADOUR</b>
                        <br> <br><br>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4 text-center text-white">
            <div class="card hover-zoom" style="width: 16rem;">
                <img src="{{asset('images/img2/cortefrechcrop.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><b>CORTE FRECH CROP</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4 text-center text-white">
            <div class="card hover-zoom" style="width: 16rem;">
                <img src="{{asset('images/img2/cortehairtattoo.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><b>CORTE HAIR TATTOO</b></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <div id="contenido2" class="contenido">
        <div class="text-center text-white">
        <h2 class="mt-4">BARBA</h2>
        <p style="font-size: 18px;">Descubre la magia de la transformación en <b>Bonita</b>, donde tu BARBA relucira.</p>
        <p class="textBlanco">
            Nuestro hábil equipo de barberos está preparado para esculpir auténticas obras
            maestras en tu barba que te harán destacar en cada ocasión. Ya sea que 
            busques un aspecto pulido y refinado o algo más audaz y vanguardista, 
            estamos aquí para resaltar tu singularidad. En Varonil, no solo ofrecemos
            cuidado de barba, sino experiencias que te inyectarán confianza y te 
            harán brillar. Únete a nosotros y permítenos convertir cada día en tu 
            mejor día para tu barba.
        </p>
        <div class="text-center text-white mt-4">
            <div class=" row ">
                <div class="col-md-6 text-center text-white">
                    <br>
                    <h2>Barba de 3 días</h2>
                    <p class="textBlanco mt-4">
                        La barba estilo Chevron lleva poco tiempo de moda, pero promete 
                        quedarse durante mucho tiempo. Se trata de un tipo de barba en la que 
                        se acentúa la densidad del bigote consiguiendo un efecto de contraste.
                        El bigote como protagonista, acompañado de una barba corta o «de tres
                        días» ganó presencia en 2020 y es ahora en 2023 cuando se está 
                        imponiendo. Para lograr un look de este tipo hay que utilizar 
                        productos específicos para barba y bigote. El estilo Chevron lo 
                        podemos ver a día de hoy en actores, músicos y diferentes influencers.
                    <br> <br>
                        
                    </p>
                </div>
                <div class="col-md-6 mt-4">
                    <br><br>
                    <img src="{{asset('images/img2/barba-chevron.jpg')}}" alt="Caballeros" width="100%" class="rounded-image hover-zoom">
                </div>
                <!--SEGUNDO-->
                <div class="col-md-6 mt-4">
                    <img src="{{asset('images/img2/barba-3-dias.jpg')}}" alt="Caballeros" width="100%" class="rounded-image hover-zoom">
                </div>
                <div class="col-md-6 text-center text-white">
                    <br><br>
                    <h2>Estilo de barba Chevron</h2>
                    <p class="textBlanco mt-4">
                        La barba de 3 días es sin duda uno de los tipos de barba más usados por los jóvenes. Consiste en llevar una barba corta, perfectamente cuidada y perfilada que simule tener pocos días de vida. Este estilo de barba es muy versátil y fácil de conseguir, tan solo hay que usar una maquinilla al 0 o 1 y un gel de precisión para el afeitado
                    <br> <br>
                        
                    </p>
                </div>
                <!--Tercero-->
                <div class="col-md-6 text-center text-white">
                    <br><br>
                    <h2>Full Bear: el tipo de barba de Oso</h2>
                    <p class="textBlanco mt-4">
                        La barba de oso es radicalmente opuesta a la barba de 3 días que acabamos de ver. El estilo Full Beard se lleva cada vez más, pero solo unos pocos valientes se atreven con este look o se lo pueden permitir. Consiste en dejarse crecer la barba hasta que adquiera una longitud y frondosidad considerables. Al mismo tiempo, se combina con un peinado tupido, larga cabellera o con tupés. Con este tipo de barba se consigue un aspecto «hipster» o estilo «vikingo»
                    <br> <br>
                        
                    </p>
                </div>
                <div class="col-md-6 mt-4">
                    <br><br>
                    <img src="{{asset('images/img2/barba-full-bear.jpg')}}" alt="Caballeros" width="100%" class="rounded-image hover-zoom">
                </div>
                <!--Cuarto-->
                <div class="col-md-6 mt-4">
                    <br>
                    <img src="{{asset('images/img2/barba-candado.jpg')}}" alt="Caballeros" width="100%" class="rounded-image hover-zoom">
                </div>
                <div class="col-md-6 text-center text-white">
                    <br><br>
                    <h2>Barba Candado</h2>
                    <p class="textBlanco mt-4">
                        Es un tipo de look muy usado que nunca pasa de moda. Nos estamos refiriendo a un tipo de barba en la que se deja crecer el vello alrededor de la boca, haciendo que se una el bigote con la perilla. El resto de la cara se puede afeitar completamente con cuchilla o dejar la zona sombreada. Es uno de los tipos de barba que las mujeres consideran más atractivas.
                    <br> <br>
                        
                    </p>
                </div>
                <!--Quinto-->
                <div class="col-md-6 text-center text-white">
                    <br><br>
                    <h2>Estilo Van Dyke</h2>
                    <p class="textBlanco mt-4">
                        Dicen que el estilo Van Dyke nació en el siglo XVII de mano del pintor Anthony Van Dyke. Para conseguir este look elegante solo tienes que combinar el bigote con la perilla y eliminar el vello de las mejillas. Es la barba de David Beckham. Pero otros famosos como Johnny Depp son también fans de este tipo de barba. Si a ti también te gusta el estilo Van Dyke solo tienes que dejarte una barba completa de un mes para después retocarla hasta conseguir el efecto deseado.
                    <br> <br>
                        
                    </p>
                </div>
                <div class="col-md-6 mt-4">
                    <br><br>
                    <img src="{{asset('images/img2/van-dyke.jpg')}}" alt="Caballeros" width="100%" class="rounded-image hover-zoom">
                </div>

            </div>    
        </div>   

    </div>
    </div>

    <div id="contenido3" class="contenido">
        <div class="text-center text-white">
            <div class=" row ">
                <div class="col-md-6 text-center text-white">
                    <br><br>
                    <h2>LAVADO</h2>
                    <p class="textBlanco mt-4">
                    
                    Nuestro servicio sumerge a los hombres en una experiencia rejuvenecedora tanto para su cabello como para sus sentidos. Cada gota de agua, cada masaje suave, se combinan para ofrecerles un momento de indulgencia pura. <br> <br>
                    Imagina sentir cómo las tensiones del día se desvanecen mientras te entregas a las manos expertas de nuestros estilistas especializados en cuidado masculino. Ven y sumérgete en un mundo de mimos y relajación con nuestro servicio de lavado, porque en <b>BONITA</b>, creemos que incluso los pequeños detalles pueden marcar una gran diferencia en tu apariencia y bienestar. <br> <br>
                    <b class="text-center">¡Experimenta la perfección en cada hebra! </b>
                        
                    </p>
                </div>
                <div class="col-md-6 mt-4">
                    <br><br><br>
                    <img src="{{asset('images/img2/lavado-cabello.jpg')}}" alt="Damas" width="100%" class="rounded-image hover-zoom">
                </div>
            </div>
        </div>
    </div>

    <div id="contenido4" class="contenido mt-4  ">
        <div class="text-center text-white">
            <div class=" row  mt-4">
                <h2>LISTA DE PRECIOS</h2>
                <h3 class="text-center mt-4">CORTES</h3>
                <div class="row textBlanco2">
                    <table>
                        <tr>
                            <td>
                                Corte cesar
                            </td>
                            <td>
                               $15.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Corte Texturizado
                            </td>
                            <td>
                               $15.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Corte Comb Over
                            </td>
                            <td>
                               $18.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Corte Pompadour
                            </td>
                            <td>
                               $18.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Corte Fresh Crop
                            </td>
                            <td>
                               $20.000
                            </td>
                        </tr>
                            
                        <tr>
                            <td>
                                Corte Hair Tatto
                            </td>
                            <td>
                               $30.000
                            </td>
                        </tr>                                                       
                    </table>
                </div>
                <h3 class="text-center mt-4">BARBA</h3>
                <div class="row textBlanco2">
                    <table>
                        <tr>
                            <td>
                                Barba Chevron
                            </td>
                            <td>
                               $15.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Barba de oso
                            </td>
                            <td>
                               $15.000
                            </td>
                        </tr>
                        <tr>
                             <td>
                                Barba de 3 días
                             </td>
                            <td>
                               $10.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Barba Candado
                            </td>
                            <td>
                               $12.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Barba Van Dyke
                            </td>
                            <td>
                               $15.000
                            </td>
                        </tr>
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

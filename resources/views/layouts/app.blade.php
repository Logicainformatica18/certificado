<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/jpg" href="{{ asset('dist/img/favicon.png') }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md  shadow-sm"style="background-color: #5a86ea">
            <div class="row">
                <div class="col col-lg-4">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('LOGO-CERTIFICACIONES.png') }}" alt="" width="80%">
                    </a>

                </div>
                <div class="col col-lg-4">

                </div>

                <div class="col col-lg-4" style="justify-content: center; align-items: center; display: flex;">
                    <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="10%">
                    <a class="text-blue" href="{{ route('logout') }}" style="color: white;">Cerrar Sesión</a>
                </div>

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    {{--     
<div class="position-absolute w-100 h-100 d-flex align-items-end" style="top: 0; left: 0; z-index: -1;">
  <p class="align-items-end"></p>
  <img src="{{asset('lineas.png')}}" alt="" class="img-fluid" style="width: 100%; height: 50%;">
</div> --}}
    <p>
        &nbsp;
        &nbsp;
    </p>
    <p>
        &nbsp;
        &nbsp;
    </p>
    <p>
        &nbsp;
        &nbsp;
    </p>
    <p>
        &nbsp;
        &nbsp;
    </p>
    <p>
        &nbsp;
        &nbsp;
    </p>
    <p>
        &nbsp;
        &nbsp;
    </p>
    <!-- Coloca este script donde quieras que aparezca el botón -->
<!-- Asegúrate de tener cargada la hoja de estilos de Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
  /* Estilos para el botón flotante de WhatsApp */
  .whatsapp-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #25d366; /* Color de fondo del botón */
    border-radius: 50%; /* Hace que el botón tenga forma circular */
    width: 60px;
    height: 60px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  }

  .whatsapp-btn a {
    display: block;
    width: 100%;
    height: 100%;
    line-height: 60px;
    color: #fff; /* Color del ícono */
    font-size: 40px;
  }
</style>
 
<!-- Botón flotante de WhatsApp -->
<div class="whatsapp-btn">
  <a href="https://api.whatsapp.com/send/?phone=51939929383&text=Buen+día+SDC+me+gustaria+recibir+información+sobre+los+Cursos+y+Certificaciones+que+disponga.+Gracias" target="_blank" title="Enviar mensaje por WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>

    <br>

    <footer class="main-footer" style="background-color:#5a86ea;color:white">



        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Descripción a la izquierda -->
                    <p>
                        &nbsp;
                        &nbsp;
                    </p>
                    <h3><b>SDC Certificate</b> </h3>
                    <p></p>
                    <p class="text-justify">
                        Certificados One Digital hace más de 6 años nuestra organización inicio sus actividades en respuesta a las
                        necesidades de capacitación percibidas en áreas analíticas y ciencia de datos. Nuestros
                        programas, cursos y certificaciones de especialización se caracterizan por el método de
                        enseñanza orientado a la resolución de casos reales, que finalmente contribuyen a fortalecer el
                        aprendizaje.
                    </p>
                    <p>
                        &nbsp;
                        &nbsp;
                    </p>
                    <p>
                        &nbsp;
                        &nbsp;
                    </p>
                    <span
                        style="background-image: linear-gradient(45deg, rgb(255, 0, 149), red); -webkit-background-clip: text; color: transparent;">
                        <a href="https://anthonycode.com"target="_blank">Copyright © 2024 Dev. AnthonyCode</a></span>
                </div>
                <div class="col-lg-4 text-center">
                    <p>
                        &nbsp;
                        &nbsp;
                    </p>
                    <!-- Enlaces en el centro -->
                    <a href="#">Nosotros</a> |
                    <a href="#">Cursos</a> |
                    <a href="#">Política de Privacidad</a>
                </div>
                <div class="col-lg-4 text-right">
                    <p>
                        &nbsp;
                        &nbsp;
                    </p>
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsdc.learning.pe&tabs=timeline&width=340&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=859285638195545"
                        width="340" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>


        </div>

    </footer>

</body>

</html>

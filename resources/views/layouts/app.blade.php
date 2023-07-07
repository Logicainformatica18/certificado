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
        <nav class="navbar navbar-expand-md  shadow-sm"style="background-color: #003399">
            <div class="row">
                <div class="col col-lg-4">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('LOGO-CERTIFICACIONES.png') }}" alt="" width="100%">
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
</body>

</html>

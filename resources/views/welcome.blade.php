<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cicec</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="{{ asset('dist/img/favicon.png') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
</head>
<style type="text/css">
<<<<<<< HEAD
 .welcome {
   margin:0px;
   background-image: url("https://blog.talenthackers.net/wp-content/uploads/2022/03/programmers-working-at-the-office-2021-09-17-18-22-53-utc-scaled.jpg");
   width:100%;
   background-repeat:no-repeat
 }
=======
    .welcome {
        margin: 0px;
        background-image: url("{{ asset('dist/img/portada.png') }}");
        width: 100%;
        background-repeat: no-repeat
    }

    .full-height {
        height: 100vh;
        /* altura de la pantalla completa */
    }

    .bg-image {
        background: url("{{ asset('banner_lateral.png') }}") no-repeat left center;
        background-size: cover;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Bold.otf') }}");
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Medium.otf') }}");
        font-weight: 300;
        font-style: normal;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Light.otf') }}");
        font-weight: 300;
        font-style: normal;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Regular.otf') }}");
        font-weight: 500;
        font-style: normal;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Semibold.otf') }}");
        font-weight: 600;
        font-style: normal;
    }

  body {
    font-family: 'Kohinoor Bangla', sans-serif;
    font-weight: 300; /* Utiliza la variante "Light" por defecto */
}



    h2 {
        font-weight: 600;
        /* Usará KohinoorBangla-SemiBold.ttf */
        color: black;
    }
>>>>>>> master
</style>

<<<<<<< HEAD
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                  <div class="login-logo">
            <b class="text-blue" style="font-family: Arial 50px">CERTIFICADOS Cicec</b>
        </div>
                <p class="login-box-msg">Ingrese sus datos para iniciar sesión</p>
                <form method="POST" action="{{ route('login') }}">
=======
<body class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 bg-image full-height d-none d-md-block">
                <!-- contenido de la primera columna -->
            </div>
            <div class="col-md-8">
                <div class="row h-100 justify-content-center align-items-center">
>>>>>>> master

                    <!-- /.login-logo -->
                    <div class="">
                        <div class="card-body login-card-body">
                            <div class="login-logo">
                                <h1 style="font-weight: bold;font-size:57px; color: #003399;"><b>CERTIFICADOS SDC</b>
                                </h1>
                            </div>
                            <p class="login-box-msg" style="color:black">Ingrese sus datos para iniciar sesión</p>
                            <p></p>
                            <form method="POST" action="{{ route('login') }}">

                                {{ csrf_field() }}
                                <div class="input-group mb-3 container">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    {{-- <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="input-group mb-3 container">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Contraseña">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    {{-- <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div> --}}
                                </div>




                                <div class="row container">

                                    <div
                                        class="col-12 text-center md d-flex  justify-content-center align-items-center">
                                        <p></p>

                                        <button type="submit"
                                            class="btn btn-primary md d-flex align-items-center justify-content-center"
                                            style="background-color: #003399;font-weight: 100%; height:50px;width:70%; border-radius: 20px;">
                                            <span style="color:white; font-size: 1.5em;">INICIAR SESIÓN</span>
                                        </button>

                                    </div>
                                </div>
                                <div class="row container">
                                    <div class="col-1"></div>
                                    <div class="col-3">
                                        <div class="icheck-primary">
                                            <p></p>
                                            <div class="">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="remember" style="color:black">
                                                    {{ __('Recuérdame') }}
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-3 text-center">

                                    </div>
                                    <!-- /.col -->

                                    <!-- /.col -->

                                    <!-- /.col -->
                                </div>
                                <p></p>
                                <div class="d-flex justify-content-center">
                                    @if (Route::has('password.request'))
                                        <a class="login-box-msg"
                                            href="{{ route('password.request') }}"style="color:#003399">
                                            ¿Olvidaste tu Contraseña?
                                        </a>
                                    @endif
                                </div>

                            </form>



                            {{-- <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div> --}}
                            <!-- /.social-auth-links -->

                            {{-- <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p> --}}
                        </div>
                        <!-- /.login-card-body -->
                    </div>
                    {{-- <style>
                        .pie {
                            margin: 0px;
                            background-image: url("{{ asset('lineas.png') }}");
                            width: 100%;
                            background-repeat: no-repeat
                        }
                    </style>
                    <div class="pie">

                    </div> --}}
                </div>
            </div>

        </div>
    </div>


    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

</body>

</html>

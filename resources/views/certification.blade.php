<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta property="og:title"
        content="Mi Certificación en : {{ $certification[0]->description }} en Cicec" />
    <meta property="og:description"
        content="El presente certificado es expedido como reconocimiento alcanzado en el proceso formativo en. {{ $certification[0]->description  }}" />
    <meta name="image" id="oimage"property="og:image"
        content="{{ url('storage/certificados/' . $registry_detail->code_certification . '_' . $cert . '.png') }}">

    <title>Cicec</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}  ">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <script src="{{ asset('linkedin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('certification2.js') }}"></script>
    <script src="{{ asset('axios.min.js') }}"></script>
    <script src="{{ asset('function.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    {{ session('success') }}

    <!-- jQuery -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script> --}}
</head>

<body class="pos-relative">

    <nav class="navbar navbar-expand-md  shadow-sm"style="background-color: #00cc99">
        <div class="row">
            <div class="col col-lg-4">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('LOGO-CERTIFICACIONES.png') }}" alt="" width="70%">
                </a>

            </div>
            <div class="col col-lg-4">

            </div>

            <div class="col col-lg-4" style="justify-content: center; align-items: center; display: flex;">
                {{-- <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="10%">
                <a href="{{ route('logout') }}" style="color: white;">Cerrar Sesión</a> --}}
            </div>

        </div>
    </nav>

    <p>
        &nbsp;
    </p>
    <p></p>
    <?php
    $host = $_SERVER['HTTP_HOST'];
    $url = $host . '/certificaciones/registry_detail_id=' . $registry_detail->id . '/language=' . $language . '/id=' . $registry_detail->code_certification . '/cert=' . $cert;
    
    $folder = $registry_detail->registry->course->folder_certification;
    $name = $registry_detail->model_has_role->student->names . ' ' . $registry_detail->model_has_role->student->firstname . ' ' . $registry_detail->model_has_role->student->lastname;
    $route_certification = asset("certification3/spanish.png");
    //$route_qr = asset("certification_qr/r_datascience/41/codigo.png");
    $route_qr =
        'data:image/png;base64,' .
        base64_encode(
            QrCode::format('png')
                ->size(150)
                ->generate($url),
        );
    ?>
    <?php
    $name_course = $registry_detail->registry->course->description;
    $organizationId = '38714525';
    $date = strtotime($registry_detail->registry->date_certification);
    $issueYear = date('Y', $date);
    
    $issueMonth = date('m', $date);
    $expirationYear = date('Y', $date);
    
    $expirationMonth = date('m', $date);
    // $url =   str_replace(":", "%3A", $url);
    //    $url =   str_replace("/", "%2F", $url);
    
    // modelo url pagina
    //https%3A%2F%2Fdocs.microsoft.com%2Fen-us%2Flearn%2Fcertifications%2Fd365-functional-consultan1t-sales
    $certId = $registry_detail->registry->description;
    
    ?>

    <div class="mt-2 mb-2 mr-5 ml-5">
        <div class="row">
            <div class="col-lg-5">

                <div style="width: 100%;">
                    <h1 style="color:#003399; font-size:400%"><b>¡Felicidades!</b></h1>
                </div>
                <p>
                    &nbsp;
                </p>
                <h2 style="font-size:200%"><b>Tu Certificado está listo.</b></h2>
                <h3 style="text-align: justify;">Cicec te felicita por tu esfuerzo. ¡Sigue aprendiendo todos los días!</h3>
                <div class="line" style="width: 100%;height: 2px;background-color: #b4b5b5"></div>
                <p></p>
                <h4 style="color:#b4b5b5; text-align: justify;">Comparte tu certificado en cualquier red social y da a
                    conocer tus habilidades al mundo. <b>¡Celebra tus logros!</b></h4>

                <p></p>
                <div class="input-group mb-3"style="width: 80%"style="background-color: #dbdbdb">
                    {{-- <input type="text" class="form-control"> --}}
                    <input type="text" id="texto" class="form-control"style="background-color: #dbdbdb"        id=""value="{{ $url }}">
                    <div class="input-group-append"style="background-color: #dbdbdb" >


                        {{--                                         
                        <span class="input-group-text">
                               </span> --}}
                        <button class="input-group-text"style="color:#003399;background-color: #dbdbdb"   onclick="copiarAlPortapapeles() ;">
                           <b >Copiar</b> </button>
                        {{-- <i class="fa fa-send mg-r-10"></i> --}}


                    </div>
                </div>
                <button class="btn btn-outline-info" id="btnpng"
                    style="background-color: #003399;color:white;width:55%">
                    <h5 style="font-size:150%">Descargar certificado </h5>
                </button>
                <b>Compártelo</b> &nbsp;


                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($url) }}" target="_blank">
                    <img src="{{ asset('linkedin.png') }}" alt="Compartir en LinkedIn" width="7%">
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" target="_blank">
  <img src="{{ asset('facebook.png') }}" alt="Compartir en Facebook" width="7%">
</a>

<a href="https://twitter.com/share?url={{ urlencode($url) }}" target="_blank">
  <img src="{{ asset('twitter.png') }}" alt="Compartir en Twitter" width="7%">
</a>
<p></p>
                <button class="btn linkedin"
                    onclick="linkedinCertificationGenerate('{{$certification[0]->description }}','{{ $organizationId }}','{{ $issueYear }}','{{ $issueMonth }}','{{ $certId }}')">
                </button>



                {{-- <div id="fb-root"></div>
                <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>

                <!-- Your share button code -->
                <div class="fb-share-button" data-href="" data-layout="button_count">
                </div> --}}

                {{-- <script src="https://platform.linkedin.com/in.js" type="text/javascript">
                                    lang: en_US
                                </script>
                                
                                <script type="IN/Share"  data-url="{{''}}">
                                </script> --}}


            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-6">
                <div class="ht-100v d-flex align-items-center justify-content-center">
                    <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
                        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

                            {{-- <canvas id="canvas" height="3672px" width="4752px" class="img-fluid" alt="Responsive image">  </canvas> --}}
                            <canvas id="canvas1" height="750px" width="1000px" class="img-fluid padre"
                                alt="Responsive image">


                            </canvas>

                            <form action="" method="post" id="certification"></form>
                        </h1>

                        <center>


                            <style>
                                .linkedin {

                                    background-image: url("{{ asset('dist/img/es_ES.png') }}");
                                    height: 40px;
                                    width: 160px;
                                    background-repeat: no-repeat
                                }
                            </style>




                            <div class="form-layout-footer align-content-center">


                                <p></p>

                                {{-- <button class="btn btn-outline-success" id="btnpdf"><i
                                        class="fa fa-send mg-r-10"></i>
                                    PDF</button> --}}


                                @role('Coordinación')
                                    <form id="certification" method="post" action="" enctype="multipart/form-data"
                                        name="certification">
                                        {{-- <button class="btn btn-danger"   onclick="certificationSavePhoto();" >Guardar </button>
                            <input type='hidden' id="img_source" name="photo" > --}}
                                    </form>
                                @endrole



                            </div>





                        </center>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <p></p>

    <style>
        .gray-image {
            filter: grayscale(100%) brightness(99%);
            position: absolute;
            top: -200px;
            left: 0;
            z-index: -1;
        }
    </style>

    <div style="position: relative;">
        <!-- Aquí van los elementos que están arriba -->

        <img src="{{ asset('lineas.png') }}" alt="Lineas" class="gray-image" style="width:100%">
    </div>










    <script>
        generateCertication("{{ $route_certification }}", "{{ $name }}", "canvas1", "{{ $route_qr }}",
            "{{ $registry_detail->code_certification }}", '{{ $cert }}',
            '{{$certification[0]->description}}','{{$certification[0]->hours}}');



        buttons_pdf("canvas")

        //buttons_png();

        $(document).on("click", "#btnpng", function() {

            let lblpng = document.createElement('a');
            lblpng.download = "Certificado.png";
            lblpng.href = canvas1.toDataURL('image/jpeg');
            lblpng.click();

        });
    </script>
    <input type="hidden" id="imagen" value="">

    <div id="mycontent"></div>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v16.0&appId=859285638195545&autoLogAppEvents=1"
        nonce="dd5Wfr6m"></script>

</body>

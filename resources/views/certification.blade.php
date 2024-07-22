<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta property="og:title"
        content="Mi Certificación en : {{ $certification[0]->description }} en Certificados One Digital" />
    <meta property="og:description"
        content="El presente certificado es expedido como reconocimiento alcanzado en el proceso formativo en. {{ $certification[0]->description }}" />
    <meta name="image" id="oimage"property="og:image"
        content="{{ url('certificados/' . $registry_detail->code_certification . '_' . $cert . '.png') }}">

    <meta property="og:image:width" content="828" />
    <meta property="og:image:height" content="450" />



    <title>Mi Certificación en : {{ $certification[0]->description }} en Certificados One Digital</title>
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
    <script type="text/javascript" src="{{ asset('certification.js') }}"></script>
    <script src="{{ asset('axios.min.js') }}"></script>
    <script src="{{ asset('function.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>


    {{ session('success') }}

    <!-- jQuery -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script> --}}
</head>
<style type="text/css">
    @font-face {
        font-family: "Montalban";
        src: url("{{ asset('fuente_one/Montalban.otf') }}");
        font-weight: 600;
        font-style: normal;
    }

    @font-face {
        font-family: "Montserrat-Bold";
        src: url("{{ asset('fuente_one/Montserrat-Bold.ttf') }}");
        font-weight: 600;
        font-style: bold;
    }

    @font-face {
        font-family: 'Montserrat-Regular';
        src: url("{{ asset('fuente_one/Montserrat-Regular.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Montserrat-BoldItalic';
        src: url("{{ asset('fuente_one/Montserrat-BoldItalic.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Montserrat-Medium';
        src: url("{{ asset('fuente_one/Montserrat-Medium.ttf') }}") format('truetype');
        font-weight: normal;
        font-style: normal;
    }
</style>

<body class="pos-relative">

    <nav class="navbar navbar-expand-md  shadow-sm"style="background-color: #5a86ea">

        <div class="container-fluid">
            <div class="row w-100">
                <div class="col col-sm-12 col-lg-6"style="font-family:Montalban">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('logo_certificaciones.png') }}" alt="" width="100px">
                    </a> | Certificaciones
                </div>
                <div class="col col-lg-2">

                </div>
                <div class="col col-lg-4 d-flex justify-content-end align-items-center">
                    <a href="{{ route('logout') }}">
                        <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="30px"
                            class="mr-2">
                    </a>
                </div>
            </div>
        </div>
    </nav>


    <p></p>
    <?php
    
    $host = $_SERVER['HTTP_HOST'];
    $url = $host . '/certificaciones/registry_detail_id=' . $registry_detail->id . '/type=' . $type . '/id=' . $registry_detail->code_certification . '/cert=' . $cert;
    
    $folder = $registry_detail->registry->course->folder_certification;
    $type = $registry_detail->registry->course->type->description;
    
    use Carbon\Carbon;
    
    $fecha = $registry_detail->registry->fec_end;
    // Crear una instancia de Carbon con la fecha dada
    $carbonDate = Carbon::parse($fecha);
    
    // Obtener el año, mes y día por separado
    $year = $carbonDate->year;
    $month = $carbonDate->month;
    $day = $carbonDate->day;
    
    /////////////////////////////////////////////////////////
    $name = $registry_detail->model_has_role->student->names . ' ' . $registry_detail->model_has_role->student->firstname . ' ' . $registry_detail->model_has_role->student->lastname;
    $route_certification = asset('certification3/plantilla_one_participacion.png');
    
    $route_qr = 'data:image/png;base64,' . base64_encode(QrCode::format('png')->size(500)->generate($url));
    ?>
    <?php
    $name_course = $registry_detail->registry->course->description;
    $organizationId = '77579829';
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


    <div class="row">
        <div class="col-12 text-center">
            <h1 style="color:#5a86ea; font-size:250%; font-family: Montserrat-Bold;"><b>¡Felicidades!</b></h1>
            <h2 style="color:#092367;font-size:80%;font-family: Montserrat-Medium">Tu Certificado está listo.</h2>
        </div>
    </div>





    <div class="mt-2 mb-2 mr-5 ml-5">
        <div class="row">
            <div class="col-lg-4"></div>

            <div class="col-lg-4 text-center">
                <div class="ht-100v d-flex align-items-center justify-content-center">
                    <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
                        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

                            {{-- <canvas id="canvas" height="3672px" width="4752px" class="img-fluid" alt="Responsive image">  </canvas> --}}
                            <canvas id="canvas1" height="1500" width="2000" alt="Responsive image"
                                style="width: 100%; height: 100%;"></canvas>

                            </canvas>

                            <form action="" method="post" id="certification"></form>
                        </h1>

                        <center>


                            <style>
                                .linkedin {

                                    background-image: url("{{ asset('dist/img/page_certification/Recurso 5.png') }}");
                                    height: 33px;
                                    width: 160px;
                                    background-repeat: no-repeat
                                }
                            </style>




                            <div class="form-layout-footer align-content-center">




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

            <div class="col-12 text-center">

                <h2 style="color:#5a86ea;font-size:120%;font-family: Montserrat-BoldItalic">
                    One Digitall reconoce tu dedicación. ¡No dejes de aprende y superarte cada día!
                </h2>
                <button class="btn btn-outline-info" id="btnpng"
                    style="border-radius:30px;background-image: linear-gradient(to right, #555Bff, #00c0ff); color:white; width:200px;height:30px;">

                    <h4 style="font-size:85%;font-family:Montserrat-Bold;padding-top:0px">PNG</h4>
                </button>
                <script></script>
                <button class="btn btn-outline-info" id="btnpdf"
                    style="border-radius:30px;background-image: linear-gradient(to right, #555Bff, #00c0ff); color:white; width:200px;height:30px;">

                    <h4 style="font-size:85%;font-family:Montserrat-Bold;padding-top:0px">PDF</h4>
                </button>
                <p></p>
                <div style="width: 100%; height: 7px; background: linear-gradient(to right, #555Bff, #00c0ff);"></div>
                <p></p>
                <p style="font-size:110;font-family:Montserrat-Medium;color:#828282"><b
                        style="font-family: Montserrat-Bold">Tus logros merecen ser vistos.</b>
                    <br>
                    Comparte tu certificado y deja que todos conozcan tus habilidades
                </p>


            </div>

            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">
                <div class="input-group mb-3"style="width: 100%" style="background-color: #09246">
                    <button
                        class="input-group-text"style="height:30px;border-radius:30px;border-color:#092469; color:#ffffff;background-color:#092469;width: 100%"
                        onclick="copiarAlPortapapeles() ;">
                        <input type="text" id="texto"
                            class="form-control"style="font-family:Montserrat-Bold;font-size:10px; background-color: #092469;color:#ffffff;border:none;height:30px"
                            id=""value="{{ $url }}">

                        <b>Copiar</b> </button>




                </div>
            </div>
            <div class="col-lg-4">

            </div>
            <div class="col-lg-12 text-center">

                <b style="font-family: Montserrat-Bold;color:#828282;font-size:80%">Compártelo</b> &nbsp;
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($url) }}" target="_blank">
                    <img src="{{ asset('dist/img/page_certification/Recurso 5.png') }}" alt="Compartir en LinkedIn"
                        width="40px">
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" target="_blank">
                    <img src="{{ asset('dist/img/page_certification/Recurso 3.png') }}" alt="Compartir en Facebook"
                        width="40px">
                </a>

                <a href="https://twitter.com/share?url={{ urlencode($url) }}" target="_blank">
                    <img src="{{ asset('dist/img/page_certification/Recurso 1.png') }}" alt="Compartir en Twitter"
                        width="40px">
                </a>

                <a href="#" class=""
                    onclick="linkedinCertificationGenerate('{{ $certification[0]->description }}','{{ $organizationId }}','{{ $issueYear }}','{{ $issueMonth }}','{{ $certId }}')">
                    <img src="{{ asset('dist/img/page_certification/Recurso 7.png') }}" alt="Compartir en Linkedin"
                        width="180px">
                </a>

            </div>



        </div>
    </div>
    <div class="row">

    </div>

    <div class="col-lg-4">





        <p>
            &nbsp;
        </p>











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




    <script>
        generateCertication("{{ $route_certification }}", "{{ $name }}", "canvas1", "{{ $route_qr }}",
            "{{ $registry_detail->code_certification }}", '{{ $cert }}',
            '{{ $certification[0]->description }}', '{{ $certification[0]->hours }}', '{{ $type }}',
            '{{ $day }}', '{{ $month }}', '{{ $year }}');



        //   buttons_pdf("canvas")

        //buttons_png();

        $(document).on("click", "#btnpng", function() {

            let lblpng = document.createElement('a');
            lblpng.download = "Certificado.png";
            lblpng.href = canvas1.toDataURL('image/jpeg');
            lblpng.click();

        });

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector("#btnpdf").addEventListener("click", function() {
                let canvas = document.querySelector("#canvas1");
                let imgData = canvas.toDataURL('image/png');

                const {
                    jsPDF
                } = window.jspdf;
                let pdf = new jsPDF('landscape', 'mm', 'letter');

                // Dimensiones del PDF en mm (210 x 297 para A4 en landscape)
                let pdfWidth = pdf.internal.pageSize.getWidth();
                let pdfHeight = pdf.internal.pageSize.getHeight();

                // Dimensiones del canvas en píxeles
                let canvasWidth = canvas.width;
                let canvasHeight = canvas.height;

                // Calcular la escala para que la imagen quepa en el PDF
                let scaleX = pdfWidth / canvasWidth;
                let scaleY = pdfHeight / canvasHeight;
                let scale = Math.min(scaleX, scaleY);

                // Calcular la posición de la imagen en el PDF para centrarla
                let imgWidth = canvasWidth * scale;
                let imgHeight = canvasHeight * scale;
                let x = (pdfWidth - imgWidth) / 1;
                let y = (pdfHeight - imgHeight) / 1;

                pdf.addImage(imgData, 'PNG', x, y, imgWidth, imgHeight);
                pdf.save("Certificado.pdf");
            });
        });
    </script>
    <input type="hidden" id="imagen" value="">

    <div id="mycontent"></div>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v16.0&appId=859285638195545&autoLogAppEvents=1"
        nonce="dd5Wfr6m"></script>

</body>

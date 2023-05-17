<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Certificados SDC</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}  ">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <script src="{{asset('linkedin.js')}}"></script>
      <script type="text/javascript" src="{{asset('certification.js')}}"></script>
 <script src="{{ asset('axios.min.js') }}"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  {{ session('success') }}

   <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    </head>
  <body class="pos-relative">

    <div class="ht-100v d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

          {{-- <canvas id="canvas" height="3672px" width="4752px" class="img-fluid" alt="Responsive image">  </canvas> --}}
    <canvas id="canvas1" height="750px" width="1000px" class="img-fluid padre" alt="Responsive image">


    </canvas>

<form action="" method="post" id="certification"></form>
        </h1>

       <center>
<?php
        $host=$_SERVER["HTTP_HOST"];
        $url=$host.'/certificaciones/registry_detail_id='.$registry_detail->id.'/language=spanish';

$folder = $registry_detail->registry->course->folder_certification;
$name = $registry_detail->model_has_role->student->firstname." ".$registry_detail->model_has_role->student->lastname." ".$registry_detail->model_has_role->student->names;

$img = "1";

$route_certification = asset("certification/$folder/$language/$img.png");
//$route_qr = asset("certification_qr/r_datascience/41/codigo.png");
$route_qr = "data:image/png;base64,".base64_encode(QrCode::format('png')->size(150)->generate($url));
?>
<script>
generateCerticationSpanish("{{$route_certification}}","{{$name}}","canvas1","{{$route_qr}}","{{$registry_detail->registry->description}}");

buttons_pdf("canvas")

 buttons_png();

</script>

<style>
    .linkedin{

        background-image: url("{{asset('dist/img/es_ES.png')}}");
height: 40px;
width: 160px;
background-repeat:no-repeat

    }
</style>
           <p></p>
            <div class="form-layout-footer align-content-center">
                <button class="btn btn-outline-info" id="btnpng"><i class="fa fa-send mg-r-10"></i> PNG</button>
                <button class="btn btn-outline-success" id="btnpdf"><i class="fa fa-send mg-r-10"></i> PDF Todo</button>
                <button class="btn linkedin" onclick="linkedinCertificationGenerate()" > </button>

<script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
<script type="IN/Share"  data-url="{{$url}}"></script>

            </div>

        </center>

      </div>
    </div>
<p></p>


<script>
              let url_image=  canvas1.toDataURL('image/jpeg');
             // alert(url_image);

              var headTag = document.getElementsByTagName('head')[0];

// Crear el elemento meta
var metaTag = document.createElement('meta');

// Establecer los atributos del meta tag
metaTag.setAttribute('property', 'og:image');
metaTag.setAttribute('content', url_image);

// Añadir el meta tag al elemento head
headTag.appendChild(metaTag);
</script>

<style>
    body {
  /* background-image: url("https://www.nationalgeographic.com.es/medio/2022/12/12/leon-1_b21b27e1_221212155936_1280x720.jpg"); */

}
</style>
  </body>


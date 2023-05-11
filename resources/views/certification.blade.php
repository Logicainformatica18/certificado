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
           {!! QrCode::size(200)->generate('http://localhost:8000/certificaciones/registry_detail_id=4') !!}
           <p></p>
            <div class="form-layout-footer align-content-center">
                <button class="btn btn-outline-info" id="btnpng"><i class="fa fa-send mg-r-10"></i> PNG</button>
                <button class="btn btn-outline-success" id="btnpdf"><i class="fa fa-send mg-r-10"></i> PDF Todo</button>
            </div>

        </center>

      </div>
    </div>
<p></p>
    <div class="ht-100v d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

          {{-- <canvas id="canvas" height="3672px" width="4752px" class="img-fluid" alt="Responsive image">  </canvas> --}}
    <canvas id="canvas2" height="750px" width="1000px" class="img-fluid padre" alt="Responsive image"> </canvas>
   </h1>


        <center>
            <div class="form-layout-footer align-content-center">
                <button class="btn btn-outline-info" id="btnpng"><i class="fa fa-send mg-r-10"></i> PNG</button>
                <button class="btn btn-outline-success" id="btnpdf"><i class="fa fa-send mg-r-10"></i> PDF Todo</button>
            </div>

        </center>

      </div>
    </div>
    <p></p>
        <div class="ht-100v d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

          {{-- <canvas id="canvas" height="3672px" width="4752px" class="img-fluid" alt="Responsive image">  </canvas> --}}
    <canvas id="canvas3" height="750px" width="1000px" class="img-fluid padre" alt="Responsive image"> </canvas>
   </h1>

        <center>
            <div class="form-layout-footer align-content-center">
                <button class="btn btn-outline-info" id="btnpng"><i class="fa fa-send mg-r-10"></i> PNG</button>
                <button class="btn btn-outline-success" id="btnpdf"><i class="fa fa-send mg-r-10"></i> PDF Todo</button>
            </div>

        </center>

      </div>
    </div>
    <p></p>
        <div class="ht-100v d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

          {{-- <canvas id="canvas" height="3672px" width="4752px" class="img-fluid" alt="Responsive image">  </canvas> --}}
    <canvas id="canvas4" height="750px" width="1000px" class="img-fluid padre" alt="Responsive image"> </canvas>
   </h1>

        <center>
            <div class="form-layout-footer align-content-center">
                <button class="btn btn-outline-info" id="btnpng"><i class="fa fa-send mg-r-10"></i> PNG</button>
                <button class="btn btn-outline-success" id="btnpdf"><i class="fa fa-send mg-r-10"></i> PDF Todo</button>
            </div>

        </center>

      </div>
    </div>
    <p></p>
        <div class="ht-100v d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

          {{-- <canvas id="canvas" height="3672px" width="4752px" class="img-fluid" alt="Responsive image">  </canvas> --}}
    <canvas id="canvas5" height="750px" width="1000px" class="img-fluid padre" alt="Responsive image"> </canvas>
   </h1>

        <center>
            <div class="form-layout-footer align-content-center">
                <button class="btn btn-outline-info" id="btnpng"><i class="fa fa-send mg-r-10"></i> PNG</button>
                <button class="btn btn-outline-success" id="btnpdf"><i class="fa fa-send mg-r-10"></i> PDF Todo</button>
            </div>

        </center>

      </div>
    </div>
    <p></p>
        <div class="ht-100v d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

          {{-- <canvas id="canvas" height="3672px" width="4752px" class="img-fluid" alt="Responsive image">  </canvas> --}}
    <canvas id="canvas6" height="750px" width="1000px" class="img-fluid padre" alt="Responsive image"> </canvas>
   </h1>

        <center>
            <div class="form-layout-footer align-content-center">
                <button class="btn btn-outline-info" id="btnpng"><i class="fa fa-send mg-r-10"></i> PNG</button>
                <button class="btn btn-outline-success" id="btnpdf"><i class="fa fa-send mg-r-10"></i> PDF Todo</button>
            </div>

        </center>

      </div>
    </div>
    <p></p>
        <div class="ht-100v d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

          {{-- <canvas id="canvas" height="3672px" width="4752px" class="img-fluid" alt="Responsive image">  </canvas> --}}
    <canvas id="canvas7" height="750px" width="1000px" class="img-fluid padre" alt="Responsive image"> </canvas>
   </h1>

        <center>
            <div class="form-layout-footer align-content-center">
                <button class="btn btn-outline-info" id="btnpng"><i class="fa fa-send mg-r-10"></i> PNG</button>
                <button class="btn btn-outline-success" id="btnpdf"><i class="fa fa-send mg-r-10"></i> PDF Todo</button>
            </div>

        </center>

      </div>
    </div>
<p></p>
    <div class="ht-100v d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

          {{-- <canvas id="canvas" height="3672px" width="4752px" class="img-fluid" alt="Responsive image">  </canvas> --}}
    <canvas id="canvas8" height="750px" width="1000px" class="img-fluid padre" alt="Responsive image"> </canvas>
   </h1>

        <center>
            <div class="form-layout-footer align-content-center">
                <button class="btn btn-outline-info" id="btnpng"><i class="fa fa-send mg-r-10"></i> PNG</button>
                <button class="btn btn-outline-success" id="btnpdf"><i class="fa fa-send mg-r-10"></i> PDF Todo</button>
            </div>

        </center>

      </div>
    </div>

<script>

//getCertification("");

<?php
$folder = $registry_detail->registry->course->folder_certification;
$name = $registry_detail->model_has_role->student->firstname." ".$registry_detail->model_has_role->student->lastname." ".$registry_detail->model_has_role->student->names;

$img = "1";
$language="spanish";
$route_certification = asset("certification/$folder/$language/$img.png");
?>

generateCerticationSpanish("{{$route_certification}}","{{$name}}","canvas1");
<?php
$img = "2";
$language="spanish";
$route_certification = asset("certification/$folder/$language/$img.png");
?>
generateCerticationSpanish("{{$route_certification}}","{{$name}}","canvas2");
<?php
$img = "3";
$language="spanish";
$route_certification = asset("certification/$folder/$language/$img.png");
?>
generateCerticationSpanish("{{$route_certification}}","{{$name}}","canvas3");
<?php
$img = "4";
$language="spanish";
$route_certification = asset("certification/$folder/$language/$img.png");
?>
generateCerticationSpanish("{{$route_certification}}","{{$name}}","canvas4");
<?php
$img = "5";
$language="spanish";
$route_certification = asset("certification/$folder/$language/$img.png");
?>
generateCerticationSpanish("{{$route_certification}}","{{$name}}","canvas5");
<?php
$img = "6";
$language="spanish";
$route_certification = asset("certification/$folder/$language/$img.png");
?>
generateCerticationSpanish("{{$route_certification}}","{{$name}}","canvas6");
<?php
$img = "7";
$language="spanish";
$route_certification = asset("certification/$folder/$language/$img.png");
?>
generateCerticationSpanish("{{$route_certification}}","{{$name}}","canvas7");
<?php
$img = "8";
$language="spanish";
$route_certification = asset("certification/$folder/$language/$img.png");
?>
generateCerticationSpanish("{{$route_certification}}","{{$name}}","canvas8");



buttons_pdf("canvas")



</script>





  </body>


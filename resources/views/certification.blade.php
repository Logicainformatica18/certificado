<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Certificados SDC</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

  {{ session('success') }}

   <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    </head>
  <body class="pos-relative">

    <div class="ht-100v d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

          {{-- <canvas id="canvas" height="3672px" width="4752px" class="img-fluid" alt="Responsive image">

          </canvas> --}}

    <canvas id="canvas" height="750px" width="1000px" class="img-fluid" alt="Responsive image">

          </canvas>



        </h1>
        <br>
        <p class="tx-16 mg-b-30 text-justify" id="cur_descrip">

        </p>



        <div id="qrcode"></div>
        {{ QrCode::size(100)->generate('https://certificados.socialdata-peru.com/')}}

        <div class="form-layout-footer">
            <button class="btn btn-outline-info" id="btnpng"><i class="fa fa-send mg-r-10"></i> PNG</button>
            <button class="btn btn-outline-success" id="btnpdf"><i class="fa fa-send mg-r-10"></i> PDF</button>
        </div>

      </div>
    </div>


<script>


var c = document.getElementById("canvas");
  var ctx = c.getContext("2d");

  var image = new Image();
      let url_=    "{{ $registry_detail->registry->course->folder_certification}}";
     //   alert(url_);

      image.src ="{{ asset('certification/python_datascience/spanish/1.png')}}";
 image.onload = function() {
            ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
                   /* Definimos tamaño de la fuente */
         //   ctx.font = '35px Relaway';
        //   ctx.font = "bold 10pt Courier";
 ctx.font = "bold 50px Open Sans";

            ctx.textAlign = "center";
            ctx.textBaseline = 'middle';
        ctx.fillStyle ="#01298a";
       // ctx.


           let student =        "{{$registry_detail->model_has_role->student->firstname}} {{$registry_detail->model_has_role->student->lastname}} {{$registry_detail->model_has_role->student->names}}"
           // student = student.toUpperCase();
        let x = canvas.width / 2  ;

            ctx.fillText(student, x, 300);

        ctx.font = "bold 20px Open Sans";
       ctx.fillStyle ="#01233A";
            ctx.textAlign = "center";


var fechaActual = new Date();
fechaActual.setMonth(fechaActual.getMonth()+2);
fechaActual.setDate(fechaActual.getDate());
var dia = fechaActual.getDate();
var mesCorto = fechaActual.toLocaleDateString('en-US', { month: 'long' });
var anio = fechaActual.getFullYear();

let text_th ="th";



let orientacion_th = x ;
let = orientacion_anio=x;
   if(mesCorto== "January") {
      x= x+5;
        orientacion_th= orientacion_th +17;
        orientacion_anio = orientacion_anio +5;

    }
    if(mesCorto== "February") {
        x= x+5;
        orientacion_th= orientacion_th +22;
        orientacion_anio = orientacion_anio +13;
    }

    if(mesCorto== "March") {
        x=x+3;
        orientacion_th= orientacion_th +8;
        orientacion_anio = orientacion_anio;
    }
    if(mesCorto== "April") {
        orientacion_th= orientacion_th ;
        orientacion_anio = orientacion_anio -10;
    }
    if(mesCorto== "May") {
        orientacion_th= orientacion_th ;
        orientacion_anio = orientacion_anio -10;
    }
    if(mesCorto== "June") {
        orientacion_th= orientacion_th +1 ;
        orientacion_anio = orientacion_anio -9;
    }
    if(mesCorto== "July") {
        orientacion_th= orientacion_th ;
        orientacion_anio = orientacion_anio -10;
    }
    if(mesCorto== "August") {

        orientacion_th= orientacion_th +15;
        orientacion_anio = orientacion_anio +10;
    }
    if(mesCorto== "September") {
        x= x+3;
        orientacion_th= orientacion_th +36
        orientacion_anio = orientacion_anio  +27;
    }
    if(mesCorto== "October") {
        x= x+2;
        orientacion_th= orientacion_th +21;
        orientacion_anio = orientacion_anio  +12;
    }
    if(mesCorto== "November") {
        x= x+1;
        orientacion_th= orientacion_th +33;
        orientacion_anio = orientacion_anio  +24;
    }
    if(mesCorto== "December") {
        x= x+1;
        orientacion_th= orientacion_th +29;
        orientacion_anio = orientacion_anio  +20;
    }
    if(dia > 9) {
      x= x;
        orientacion_th= orientacion_th +5;
        orientacion_anio = orientacion_anio +5;
    }




    ctx.fillText( mesCorto+" "+dia + "  "  , x -30, 492);
    ctx.font = "bold 15px Open Sans";
            ctx.fillText(text_th  , orientacion_th +3, 490);
            ctx.font = "bold 20px Open Sans";
            ctx.fillText(", " +anio  , orientacion_anio  + 48, 492);

        };






//generar png
        $(document).on("click","#btnpng", function(){
    let lblpng = document.createElement('a');
    lblpng.download = "Certificado.png";
    lblpng.href = canvas.toDataURL();
    lblpng.click();
});
//generar pdf
$(document).on("click","#btnpdf", function(){
    var imgData = canvas.toDataURL('image/png');
    var doc = new jsPDF('l', 'mm');
    doc.addImage(imgData, 'PNG', 30, 15);
    doc.save('Certificado.pdf');
});


</script>




















 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script type="text/javascript" src="certification.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

  </body>


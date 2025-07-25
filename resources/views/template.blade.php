<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aybar Corp</title>
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
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="icon" type="image/jpg" href="{{ asset('ayba/favicon.png') }}" />

    <script src="{{ asset('axios.min.js') }}"></script>
    <script src="{{ asset('category.js') }}"></script>


    <script src="{{ asset('function.js') }}"></script>

    <script src="{{ asset('user.js') }}" defer></script>
    <script src="{{ asset('role.js') }}"></script>
    <script src="{{ asset('schedule.js') }}"></script>
    <script src="{{ asset('registry.js') }}"></script>
    <script src="{{ asset('certification.js') }}"></script>

    <script src="{{ asset('registry_detail.js') }}"></script>
    <script src="{{ asset('type.js') }}"></script>
    <script src="{{ asset('course.js') }}"></script>
    <script src="{{ asset('exam.js') }}"></script>
    <script src="{{ asset('qualification.js') }}"></script>
    <script src="{{ asset('inscription.js') }}"></script>
    <script src="{{ asset('topic.js') }}"></script>
    
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- YOUTUBE LITE -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1/lite-youtube.min.js"></script>
    <!-- YOUTUBE LITE -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>


    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
     <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="{{asset('dist/js/pages/dashboard.js')}}"></script> --}}
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>




    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WDNWXGWF');</script>
    
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-footer-fixed"style="font-family:Montserrat-Regular">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTMWDNWXGWF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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

        @font-face {
            font-family: 'Montserrat-SemiBold';
            src: url("{{ asset('fuente_one/Montserrat-SemiBold.ttf') }}") format('truetype');
            font-weight: normal;
            font-style: normal;
        }
    </style>
      <style>
        .dt-buttons button {
            border-radius: 10px !important;
            font-family: Montserrat-Bold;

        }

        .dt-buttons button span {

            font-color: #ffffff !important;
        }
    </style>
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand"
            style="background: linear-gradient(to right,#023039,#0d0d0e);color:white">

        

              
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/') }}" class="nav-link">
                        <img style="margin-top: -5px" src="{{ asset('ayba/3.png') }}" alt="" width="100px">

                    </a>
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/') }}" style="font-family:Montalban;"class="nav-link text-white">| Academy</a>
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('logout') }}" class="nav-link">
                        <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="30px"
                        class="mr-2">
                    </a>
                  </li>
            </ul>
        </nav>



        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4"
            style="background: linear-gradient(to right,#023039,#0d0d0e);">
            <!-- Brand Logo -->
            <a href="/" class="brand-link text-center">
                <h3 style="color:white"><b>
                        <img src="{{ asset('ayba/4.png') }}" alt="AdminLTE Logo"class="" width="70%"
                            style="">

                </h3>
                <p></p>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        @if (Auth::user()->photo == '' && Auth::user()->sex == 'M')
                            <img src="{{ asset('Recurso 23.png') }}" class="img-circle elevation-2" alt="User Image">
                        @elseif (Auth::user()->photo == '' && Auth::user()->sex == 'F')
                            <img src="{{ asset('Recurso 23.png') }}" class="img-circle elevation-2" alt="User Image">
                        @else
                            <img src="{{ asset('imageusers/' . Auth::user()->photo) }}" class="img-circle elevation-2"
                                alt="User Image">
                        @endif
                    </div>
                    <div class="info">

                        <a href="{{ route('home') }}">

                            <h5 style="color:white;font-family:Montserrat-Bold">{{ Auth::user()->names }}</h5>
                        </a>
                    </div>
                    <br>


                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        {{-- <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Tablero
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                    <a href="./index.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>
                                 <li class="nav-item">
                                    <a href="./index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v2</p>
                                    </a>
                                </li>
                               <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v3</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Widgets
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Layout Options
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">6</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Top Navigation</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Top Navigation + Sidebar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/boxed.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Boxed</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Sidebar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-topnav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Navbar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/fixed-footer.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Footer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Collapsed Sidebar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Charts
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/charts/chartjs.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ChartJS</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/flot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Flot</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inline</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    UI Elements
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/UI/general.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/icons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Icons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/buttons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Buttons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/sliders.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sliders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/modals.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Modals & Alerts</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/navbar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Navbar & Tabs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/timeline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Timeline</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/ribbons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ribbons</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Forms
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/forms/general.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General Elements</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/advanced.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Advanced Elements</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/editors.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Editors</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/validation.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Validation</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}

                        @role('Coordinación')
                            <li class="nav-item has-treeview menu-close">
                                <a href="#" class="nav-link">
                                    {{-- <i class="nav-icon fas fa-table"></i> --}}
                                    <img src="{{ asset('Recurso 22.png') }}" alt="" srcset="" width="25px">
                                    <p style="font-family:Montserrat-Bold">
                                        Coordinador
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>

                                <ul class="nav nav-treeview" style="font-size:15px">
                                    <li class="nav-item">

                                        <a href="{{ route('usuarios.index') }}" class="nav-link">

                                            <img src="{{ asset('Recurso 23.png') }}" alt="" srcset=""
                                                width="25px">
                                            <p style="margin-left:5px;">Usuarios</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('categorias.index') }}" class="nav-link">
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            <img src="{{ asset('Recurso 21.png') }}" alt="" srcset=""
                                                width="25px">
                                            <p style="margin-left:5px;">Categorías</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('cursos.index') }}" class="nav-link">
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            <img src="{{ asset('Recurso 15.png') }}" alt="" srcset=""
                                                width="25px">
                                            <p style="margin-left:5px;">Cursos</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('horarios.index') }}" class="nav-link">
                                            <img src="{{ asset('Recurso 21.png') }}" alt="" srcset=""
                                                width="25px">
                                            <p style="margin-left:5px;">Horarios</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('registros.index') }}" class="nav-link">
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            <img src="{{ asset('Recurso 21.png') }}" alt="" srcset=""
                                                width="25px">
                                            <p style="margin-left:5px;">Registros</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('roles.index') }}" class="nav-link">
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            <img src="{{ asset('roles.png') }}" alt="" srcset=""
                                                width="25px">
                                            <p style="margin-left:5px;">Roles</p>
                                        </a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="{{ route('tipos.index') }}" class="nav-link">
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            <img src="{{ asset('tipos.png') }}" alt="" srcset=""
                                                width="25px">
                                            <p style="margin-left:5px;">Tipos</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
    
                            @endrole


                                {{-- <li class="nav-item">
                                    <a href="pages/tables/data.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>DataTables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>jsGrid</p>
                                    </a>
                                </li> --}}
                  
                        @role('Socio Comercial')
                            <li class="nav-item has-treeview menu-open">

                                <a href="#" class="nav-link">
                                    {{-- <i class="nav-icon fas fa-table"></i> --}}
                                    <img src="{{ asset('Recurso 22.png') }}" alt="" srcset=""
                                        width="25px">
                                    <p style="font-family:Montserrat-Bold">
                                        Socio Comercial
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="font-size:15px">


                                    <li class="nav-item">
                                        <a href="{{ route('Mis-certificados.index') }}" class="nav-link">
                                            <img src="{{ asset('certificados.png') }}" alt="" srcset=""
                                                width="25px">
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            <p style="margin-left:5px;">Mis Certificados</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('Mis-cursos.index') }}" class="nav-link">
                                            <img src="{{ asset('miscursos.png') }}" alt="" srcset=""
                                                width="25px">
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            <p style="margin-left:5px;">Mis Cursos</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('inscripcion.index') }}" class="nav-link">
                                            <img src="{{ asset('Recurso 15.png') }}" alt="" srcset=""
                                                width="25px">
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            <p style="margin-left:5px;">Cursos en Emisión</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        @endrole
                        @role('Coach')
                            <li class="nav-item has-treeview menu-close">

                                <a href="#" class="nav-link">
                                    {{-- <i class="nav-icon fas fa-table"></i> --}}
                                    <img src="{{ asset('Recurso 22.png') }}" alt="" srcset=""
                                        width="25px">
                                    <p style="font-family:Montserrat-Bold">
                                        Coach
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="font-size:15px">

                                    <li class="nav-item">
                                        <a href="{{ route('registros.index') }}" class="nav-link">
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            <img src="{{ asset('certificados.png') }}" alt="" srcset=""
                                                width="25px">
                                            <p style="margin-left:5px;">Mis Registros</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('cursos.index') }}" class="nav-link">
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            <img  src="{{ asset('Recurso 15.png') }}" alt="" srcset=""
                                                width="25px">
                                                
                                            <p style="margin-left:5px;">Cursos</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endrole
                        {{-- <li class="nav-header">EXAMPLES</li>
                        <li class="nav-item">
                            <a href="pages/calendar.html" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Calendar
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Gallery
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Mailbox
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/mailbox/mailbox.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inbox</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/mailbox/compose.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Compose</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/mailbox/read-mail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Read</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Pages
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/examples/invoice.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Invoice</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/profile.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/e-commerce.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>E-commerce</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/projects.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Projects</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/project-add.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Add</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/project-edit.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Edit</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/project-detail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Detail</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/contacts.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contacts</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Extras
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/examples/login.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Login</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/register.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/forgot-password.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Forgot Password</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/recover-password.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Recover Password</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/lockscreen.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lockscreen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Legacy User Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/language-menu.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Language Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/404.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Error 404</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/500.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Error 500</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/pace.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pace</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/blank.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Blank Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="starter.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Starter Page</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">MISCELLANEOUS</li>
                        <li class="nav-item">
                            <a href="https://adminlte.io/docs/3.0" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Documentation</p>
                            </a>
                        </li>
                        <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Level 1</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Level 1
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Level 2
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Level 1</p>
                            </a>
                        </li>
                        <li class="nav-header">LABELS</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p class="text">Important</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Warning</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Informational</p>
                            </a>
                        </li> --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
                <div class="user-panel pl-6 mt-3 pb-3 mb-3 d-flex">




                </div>
                <div class="user-panel pl-2 mt-3 pb-3 mb-3 d-flex">


                    <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="15px">
                    <a href="{{ route('logout') }}" style="color: white;" class="ml-2">Cerrar Sesión</a>


                </div>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main content -->
                <div class="content-wrapper">
                    <!-- Main content -->
                    <section class="content" style="background-color: white" >
                        <div class="container-fluid">
                            @yield('content')

                        </div>
                    </section>

                </div>
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer" style="background: linear-gradient(to right,#023039,#0d0d0e);">
                <span>
                    <a class="text-white" href="https://anthonycode.com"target="_blank">Copyright © 2025 Dev. AnthonyCode</a></span>
                <div class="float-right d-none d-sm-inline-block">
                </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </section>
        <!-- /.control-sidebar -->

    </div>
    <!-- ./wrapper -->



    <!--  USO DE DATATABLE PARA GENERAR PDF - CSV  -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-colvis-1.6.4/b-html5-1.6.4/b-print-1.6.4/sl-1.3.1/datatables.min.css" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-colvis-1.6.4/b-html5-1.6.4/b-print-1.6.4/sl-1.3.1/datatables.min.js">
    </script>


    <script>
        function datatable_load() {
            $("#example1").DataTable({
               
                "language": {
                    "lengthMenu": "Display _MENU_ records per page",
                    "zeroRecords": "No se encontró nada",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Buscar : ",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "info": true,
                "responsive": false,
                "autoWidth": false,
                "paging": true,
                "searching": true,
                "ordering": false,

                dom: 'Bfrtip',
                buttons: [

                    {
                        extend: 'pdfHtml5',
                        download: 'open',
                        orientation: 'landscape',
                        pageSize: 'LEGAL',

                        
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    }, {

                        extend: 'csvHtml5',
                        text: 'CSV',
                        exportOptions: {
                            modifier: {
                                search: 'none'
                            }
                        }

                    },
                    {
                        extend: 'print',
                        text: 'Imprimir',
                        autoPrint: true
                    },
                    {
                        extend: 'copyHtml5',
                        text: 'Copiar',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    },
                    {
                        extend: 'collection',
                        text: 'Mostrar',
                        buttons: ['columnsVisibility'],
                        visibility: true
                    }


                ],
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }],
                select: {
                    style: 'multi',
                    selector: 'td:first-child'
                },
                // order: [
                //     [1, 'asc']
                // ]

            });
        }
        datatable_load();
    </script>
       <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }} "></script>
       <script>
           $(function() {
               bsCustomFileInput.init();
           });
       </script>

<style>
    /* Estilos para el botón flotante de WhatsApp */
    .whatsapp-container {
        position: fixed;
        bottom: 80px;
        right: 20px;
        display: flex;
        align-items: center;
    }

    .whatsapp-btn {
        background-color: #25d366;
        /* Color de fondo del botón */
        border-radius: 50%;
        /* Hace que el botón tenga forma circular */
        width: 60px;
        height: 60px;
        text-align: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        margin-right: 10px; /* Espacio entre el botón y el mensaje */
    }

    .whatsapp-btn a {
        display: block;
        width: 100%;
        height: 100%;
        line-height: 60px;
        color: #fff;
        /* Color del ícono */
        font-size: 40px;
    }

    .whatsapp-message {
        background-color: #023039;
        color: #fff;
        padding: 10px;
        border-radius: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        font-family: Arial, sans-serif;
        font-size: 10px;
        white-space: nowrap; /* Evita que el texto se divida en varias líneas */
    }
</style>

    <!-- Contenedor para el botón de WhatsApp y el mensaje -->
    <div class="whatsapp-container">
        {{-- <div class="whatsapp-message">
            ¿Necesitas ayuda?
        </div> --}}
        <div class="whatsapp-btn">
            <a href="https://wa.pe/onedigital" target="_blank" title="Enviar mensaje por WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
  
    </div>

    <!-- Font Awesome para el ícono de WhatsApp -->
    {{-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> --}}
</body>

</html>

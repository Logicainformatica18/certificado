@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h2><b>Hola, {{ Auth::user()->names }}.</b> ¡Bienvenido(a)! </h2>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Perfil</li> --}}
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> ¡Expertos que garantizan tu aprendizaje!</h5>

        Inicia aquí un nuevo reto en tu carrera profesional y centro de labores. Te presentamos la plataforma que unirá a
        toda nuestra comunidad Learning, la cual te ayudará a brindar un mejor flujo de funcionalidad, efectiva y
        practicidad
        para la
        emisión de tus certificados.
    </div>

    <div class="row container">

        <div class="card card-widget widget-user-2">

            <div class="widget-user-header bg-white">
                <div class="widget-user-image">

                    {{-- <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar"> --}}

                    @if ($users->photo == '' && $users->sex == 'M')
                        <img class="img-circle elevation-1" src="male.png" alt="User Avatar">
                    @elseif($users->photo == '' && $users->sex == 'F')
                        <img class="img-circle elevation-2" src="female.png" alt="User Avatar">
                    @else
                        <img src="imageusers/{{ $users->photo }}" class="img-circle elevation-2" alt='User Avatar'>
                    @endif
                </div>

                <h3 class="widget-user-username"><b>{{ Auth::user()->names }}</b> </h3>
                <h5 class="widget-user-desc">Estudiante</h5>
            </div>

        </div>
    </div>



    <div id="mycontent">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6">
                        <h5><b>Información básica</b></h5>
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline" id="mycontent">
                            <div class="card-body box-profile" style="font-size: 12px">



                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Nombre completo</b> <a class="float-right">{{ $users->firstname }}
                                            {{ $users->lastname }}
                                            {{ $users->names }}</a>
                                    </li>

                                    <li class="list-group-item">
                                        <b>Dirección de correo</b> <a
                                            class="float-right">{{ $users->email }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>DNI</b> <a class="float-right">{{ $users->dni }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>ID de estudiante</b> <a class="float-right">2023SDC00{{ $users->id }}</a>
                                    </li>

                                  


                                </ul>



                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                        <!-- /.card -->
                    </div>

                    <div class="col-md-6">
                        <h5><b>Información adicional</b></h5>
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline" id="mycontent">
                            <div class="card-body box-profile" style="font-size: 12px">



                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Sexo</b>
                                        @if ($users->sex == 'M')
                                            <a class="float-right">Masculino</a>
                                        @else
                                            <a class="float-right">Femenino</a>
                                        @endif

                                    </li>



                                    <li class="list-group-item">
                                        <b>Fecha de nacimiento</b> <a
                                            class="float-right">{{ $users->datebirth }}</a>
                                    </li>
                                   
                                    <li class="list-group-item">
                                        <b>Celular</b> <a class="float-right">{{ $users->cellphone }}</a>
                                    </li>
                                    {{-- <li class="list-group-item">
                                        <b>Nacimiento</b> <a class="float-right">{{ $users->datebirth }}</a>
                                    </li> --}}
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>

               <div class="col-md-6">
                        <h5><b>Información laboral</b></h5>
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline" id="mycontent">
                            <div class="card-body box-profile" style="font-size: 12px">

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Cargo</b>
                                            <a class="float-right">Estudiante</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Experiencia</b> <a
                                            class="float-right">{{ $users->datebirth }}</a>
                                    </li>
                                   
                                    
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>














             
                    {{-- <div class="col-md-6">
                        <div class="card">
                            <form accept-charset="utf-8" id="user" method="POST" action=""
                                enctype="multipart/form-data" name="user">
                                <input type="hidden" name="id"value="{{ $users->id }}">
                
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="settings">
                                            <div class="form-group row">
                                                <label for="inputEmail"
                                                    class="col-sm-2
                                            col-form-label">Fotografía</label>
                                                <div class="btn btn-default btn-file col-10">
                                                    <i class="fas fa-paperclip"></i> Subir
                                                    <input type='file' id="imgInp" name="photo"
                                                        onchange="readImage(this);">
                                                </div>
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-8">
                                                    <br>
                                                    <img id="blah" src="https://via.placeholder.com/150"
                                                        alt="Tu imagen" class="img-bordered" width="200">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputcellphone"
                                                    class="col-sm-2
                                            col-form-label">Celular</label>
                                                <div class="col-sm-10">
                                                    <input type="number" name="cellphone" class="form-control"
                                                        placeholder="cellphone" value="{{ $users->cellphone }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputdatebirth"
                                                    class="col-sm-2
                                            col-form-label">Nacimiento</label>
                                                <div class="col-sm-10">

                                                    <div class="row">
                                                        <div class="col s4">


                                                            <select name="day" class="form-control">
                                                                <option>Dia</option>
                                                                <?php for ($a = 1; $a <= 31; $a++) {
                                                                    echo "<option value='$a'>" . $a . '</option>';
                                                                } ?>
                                                            </select>
                                                        </div>

                                                        <div class="col s4">
                                                            <select name="month" class="form-control">
                                                                <option>Mes</option>
                                                                <?php
                                                                $mes = ['', 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
                                                                for ($b = 1; $b <= 12; $b++) {
                                                                    echo "<option value='$b'>" . $mes[$b] . '</option>';
                                                                } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col s4">
                                                            <select name="year" class="form-control">
                                                                <option>Año</option>
                                                                <?php
                                                                $c = 2020;
                                                                while ($c >= 1905) {
                                                                    echo "<option value='$c'>" . $c . '</option>';
                                                                    $c = $c - 1;
                                                                }
                                                                ?>
                                                            </select>
                                                            <?php echo '<script> user.day.value=' . substr($users->datebirth, 8, 2) . ';</script>'; ?>
                                                            <?php echo '<script> user.month.value=' . substr($users->datebirth, 5, 2) . ';</script>'; ?>
                                                            <?php echo '<script> user.year.value=' . substr($users->datebirth, 0, 4) . ';</script>'; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="userUpdateProfile();">Guardar cambios</button>
                                                </div>
                                            </div>

                                        </div>
                               
                                    </div>
                           
                                </div>
                            </form>
                        </div>
                     
                    </div> --}}

                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

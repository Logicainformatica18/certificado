@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header" style="font-family:Montserrat-Regular">
        <p></p>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="font-family:Montserrat-Bold;color:#1b3d6d">Usuarios</h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active" style="color:#1b3d6d">Usuarios</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Button trigger modal -->

    <p></p>
    <button type="button"style="border-radius:20px;background-color:#5a86ea;color:white;width:250px" class="btn"
        data-toggle="modal" data-target="#exampleModal"
        onclick="New();$('#user')[0].reset();user.fotografia.src="https://via.placeholder.com/150;'>
        <span style="font-family: Montserrat-Bold;font-size:15px">+</span> Agregar
    </button>
    <p></p>
    <div class="row">
        <div class="col col-lg-2 col-md-4 col-sm-5">
            <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="btn btn-default btn-file col-9"style="border-radius:20px">
                    <i class="fas fa-paperclip"></i> Subir Archivo Excel
                    <input type="file" name="file" class="form-control">
                </div>
        </div>
        <div class="col col-lg-8 col-md-8  col-sm-6"style="margin-left:-45px">
            <button class="btn btn-success"style="border-radius:20px">Importar</button>
            </form>
        </div>
 
    </div>
<p></p>
    <div class="row">
        <div class="col col-lg-9 col-md-9 col-sm-12">
            ID Google Sheet:
          <input id="id_sheet" type="text"class="form-control" width="100%" placeholder="ejem: 1ShgVLdsBMDAW2v4Xzk3JL8xls0KlKUEUMzY5mlTvwds"
          value="1hoWjx5VabJ-zkqm0Q58KzguawIXE-RIZCRAd5Whajtk">

        </div>
        <div class="col col-lg-3 col-md-3 col-sm-6">
            Rango: 
          <input id="range" type="text"class="form-control" width="100%" placeholder="ejem: hoja1!A1:D10"
          value="hoja!A1:H10">

        </div>
        <div class="col col-lg-6 col-md-6 col-sm-6">
            <br>
            <button type="button"style="border-radius:20px;background-color:#5a86ea;color:white" class="btn"
            onclick='userImportGoogle()'>
            <span style="font-family: Montserrat-Bold;font-size:15px">+</span> Importar Google
        </button>

        </div>
      
    </div>


    <!-- /.content -->
    {{-- {{ $user->onEachSide(1)->links() }} --}}
    <p></p>
    <div id="mycontent">
        @include('usertable')
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"style="font-color:#1b3d6d;font-family:Montserrat-Bold"
                        style="font-color:#1b3d6d;font-family:Montserrat-Bold">Mantenimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form" id="user" name="form">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}

                        Dni<input name="dni" type="number" class="form-control"value="99999999">
                        Paterno<input name="firstname" type="text" class="form-control">
                        Materno<input name="lastname" type="text" class="form-control">
                        Nombres<input name="names" type="text" class="form-control">
                        Celular<input type="number" name="cellphone" class="form-control"value="99999999">
                        Email<input type="text" name="email" class="form-control">
                        Contraseña<input type="password" name="password" class="form-control"value="12345678">
                        Sexo
                        <div class="container">
                            <div class="row ">
                                <div class="col">
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="sex" id="M"
                                        value="M" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Masculino
                                    </label>
                                </div>
                                <div class="col">
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="sex" id="F"
                                        value="F">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Femenino
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        Fecha de Nacimiento :
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
                                    }
                                    ?>
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
                            </div>
                        </div>
                        <p></p>
                        <div class="container align-content-center">
                            <div class="form-group row">
                                Fotografía
                                <div class="col-sm-1"></div>
                                <div class="btn btn-default btn-file col-9">
                                    <i class="fas fa-paperclip"></i> Subir
                                    <input type='file' id="imgInp" name="photo"
                                        onchange="readImage(this,'#blah');">
                                </div>


                            </div>
                            <div class="size-100">
                                <br>
                                <img id="blah" name="fotografia" src="https://via.placeholder.com/150"
                                    alt="Tu imagen" class="img-bordered" width="100%">
                            </div>
                        </div>



                </div>
                <div class="modal-footer"style="font-family:Montserrat-Bold">
                    <input type="button" value="Nuevo" class="btn"
                        style="font-family:Montserrat-SemiBold;background-color:#5a86ea;color:#ffffff"
                        onclick="New();$('#user')[0].reset(); user.fotografia.src='https://via.placeholder.com/150';"
                        name="new">
                    <input type="button" value="Guardar" class="btn btn-success" onclick="userStore()" id="create">
                    <input type="button" value="Modificar" class="btn btn-danger" onclick="userUpdate();"
                        id="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"style="font-color:#1b3d6d;font-family:Montserrat-Bold">
                        Gestionar Permisos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form" id="user_role" name="form">
                        <input type="hidden" name="id">
                        {{ csrf_field() }}
                        Roles :
                        <select name="role" id="" class="form-control">
                            @foreach ($roles as $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <input type="button" style="color:#ffffff;background-color:#5a86ea;font-family:Montserrat-Bold"
                            value="Agregar" class="btn" onclick="userRoleStore()" name="create">


                        <div id="mycontent_detail">
                            @if (isset($user->roles_) == null)
                            @else
                                @include('user_roletable')
                            @endif

                        </div>



                </div>
                <div class="modal-footer"style="font-family:Montserrat-Bold">
                    <input type="button" value="Nuevo" class="btn"
                        style="font-family:Montserrat-SemiBold;background-color:#5a86ea;color:#ffffff"
                        onclick="New();$('#role')[0].reset();" name="new">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

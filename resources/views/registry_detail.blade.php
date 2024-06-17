@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <p></p>
    <section class="content-header">

        <div class="container-fluid">
            <div class="row mb-2" >
                <div class="col-sm-6">
                    <h1 style="font-family:Montserrat-Bold;color:#1b3d6d">Registro/Mantenimiento</h1>
                    {{ session('success') }}
<p></p>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active" style="color:#1b3d6d">Registro Mantenimiento</li>
                    </ol>
                </div>
                <div class="col-sm-2" style="font-family:Montserrat-SemiBold;color:#1b3d6d">
                    <h3>Registro:</h3>
                </div>
                <div class="col-sm-1" style="font-family:Montserrat-Regular">
                    <h4>{{ $registry_id }}</h4>
                </div>
                <div class="col-sm-2" style="font-family:Montserrat-SemiBold;color:#1b3d6d">
                    <h3>Edición:</h3>
                </div>
                <div class="col-sm-1" style="font-family:Montserrat-Regular">
                    <h4>{{ $registry->edition }} </h4>
                </div>
                <div class="col-sm-1" style="font-family:Montserrat-SemiBold;color:#1b3d6d">
                    <h3>ID:</h3>
                </div>
                <div class="col-sm-5" style="font-family:Montserrat-Regular">
                    <h4> {{ $registry->description }} </h4>
                </div>
                <div class="col-sm-3" style="font-family:Montserrat-SemiBold;color:#1b3d6d">
                    <h3>Frecuencia:</h3>
                </div>
                <div class="col-sm-2" style="font-family:Montserrat-Regular">
                    <h4>  {{ $registry->schedule->description }} </h4>
                </div>
                <div class="col-sm-7" style="font-family:Montserrat-Regular">
                    
                </div>
                <div class="col-sm-3" style="font-family:Montserrat-SemiBold;color:#1b3d6d">
                    <h3>Fecha Inicio:</h3>
                </div>
                <div class="col-sm-2" style="font-family:Montserrat-Regular">
                    <h4>  {{ substr($registry->fec_start,0,10) }} </h4>
                </div>
                <div class="col-sm-2" style="font-family:Montserrat-SemiBold;color:#1b3d6d">
                    <h3>Fecha Fin:</h3>
                </div>
                <div class="col-sm-2" style="font-family:Montserrat-Regular">
                    <h4>   {{ substr($registry->fec_end,0,10) }}  </h4>
                </div>
            </div>


        </div><!-- /.container-fluid -->
    </section>
    @role('Coordinación')
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
            onclick="New();$('#registry_detail')[0].reset();">
            Agregar Estudiante
        </button>
    @endrole
    <p></p>
    <div class="col col-lg-2">
        <form action="{{ route('registry_detail.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" class="form-control">
            <br>

    </div>
    <div class="col col-lg-2">
        <button class="btn btn-success">Importar</button>
        </form>
    </div>
    {{-- Buscar
                            <form  name="for"id="show">
                                <input type="text"name="show" class="form-control" style="width: 50%"  onkeydown="registryShow();">
                            </form> --}}

    <p></p>
    <!-- /.content -->
    {{-- {{ $registry->onEachSide(5)->links() }} --}}
    <div id="mycontent">



        @include('registry_detailtable')

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
                    <form action="" method="post" role="form" id="registry_detail" name="registry_detail">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}

                        Estudiantes

                        <select name="student" id="student" class="form-control">
                            @foreach ($student as $item)
                                <option value="{{ $item->model_id }}-{{ $item->model_type }}-{{ $item->role_id }}">
                                    {{ $item->email }} -- {{ $item->firstname }} {{ $item->lastname }}
                                    {{ $item->names }} </option>
                            @endforeach
                        </select>


                </div>
                <div class="modal-footer"style="font-family:Montserrat-Bold">
                    <input type="button" value="Nuevo" class="btn"
                        style="font-family:Montserrat-SemiBold;background-color:#5a86ea;color:#ffffff"
                        onclick="New();$('#registry_detail')[0].reset();" name="new">
                    <input type="button" value="Guardar" class="btn btn-success"id="create"
                        onclick="registry_detailStore()" name="create">
                    <input type="button" value="Modificar" class="btn btn-danger"id="update"
                        onclick="registry_detailUpdate();" name="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <p></p>
                    <h5 class="modal-title" id="exampleModalLabel"style="font-color:#1b3d6d;font-family:Montserrat-Bold">
                        Calificaciones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form" id="qualification" name="qualification">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}

                        <h3 id="student_description">

                        </h3>
                        Nota 1 : <input type="number" name="n1" id="n1" class="form-control"onchange=""
                            disabled>
                        Nota 2 : <input type="number" name="n2" id="n2" class="form-control" disabled>
                        Nota 3 : <input type="number" name="n3" id="n3" class="form-control" disabled>
                        Nota 4 : <input type="number" name="n4" id="n4" class="form-control" disabled>
                        Nota 5 : <input type="number" name="n5" id="n5" class="form-control"disabled>
                        Nota 6 : <input type="number" name="n6" id="n6" class="form-control"disabled>
                        Nota 7 : <input type="number" name="n7" id="n7" class="form-control"disabled>
                        Nota 8 : <input type="number" name="n8" id="n8" class="form-control"disabled>

                        @for ($i = 1; $i <= $registry->count_notes; $i++)
                            <script>
                                document.getElementById('n{{ $i }}').disabled = false;
                            </script>
                        @endfor

                        ESTUDIANTE MATRICULADO
                        <select name="pay" id="pay" class="form-control">

                            <option value="not">No</option>
                            <option value="yes">Si</option>
                        </select>
                </div>
                <div class="modal-footer"style="font-family:Montserrat-Bold">

                    <input type="button" value="Modificar" class="btn btn-success"id="update"
                        onclick="registry_detailUpdate();" name="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

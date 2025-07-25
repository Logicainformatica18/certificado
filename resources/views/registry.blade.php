@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <p></p>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="font-family:Montserrat-Bold;color:#1b3d6d">Registros</h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active" style="color:#1b3d6d">Registros</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    @role('Coordinación|Administrador')
        <!-- Button trigger modal -->
        <button type="button"style="border-radius:20px;background-color:#023039;color:white" class="btn" data-toggle="modal"
            data-target="#exampleModal" onclick="New();$('#registry')[0].reset();">
            <span style="font-family: Montserrat-Bold;font-size:15px">+</span> Agregar
        </button>

        <p></p>
        {{-- Buscar
                            <form  name="for"id="show">
                                <input type="text"name="show" class="form-control" style="width: 50%"  onkeydown="registryShow();">
                            </form> --}}
    @endrole
    <p></p>
    <!-- /.content -->
    {{-- {{ $registry->onEachSide(5)->links() }} --}}
    <div id="mycontent">


        @include('registrytable')

    </div>

    @php
    $validate;
@endphp



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
                    <form method="post" id="registry" name="registry">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}
                        Código : <input type="text" name="description" id="description" class="form-control">
                        Edición: <input type="number" name="edition" id="edition" class="form-control">
                        Coach
                        <select name="teacher" id="teacher" class="form-control">
                            @foreach ($teacher_new as $item)
                                <option value="{{ $item->model_id }}-{{ $item->model_type }}-{{ $item->role_id }}">
                                    {{ $item->firstname }} {{ $item->lastname }} {{ $item->names }} </option>
                            @endforeach
                        </select>
                        Cursos :
                        <select name="course" id="course" class="form-control">
                            @foreach ($course as $item)
                                <option value="{{ $item->id }}">{{ $item->description }}
                                    -{{ $item->type->description }} </option>
                            @endforeach
                        </select>
                        Tipo :
                        <select name="type" id="type" class="form-control">

                            <option value="Clase">Clase</option>
                            <option value="Evento">Evento</option>
                        </select>
                        Fecha Inicio :
                        <input type="date" name="fec_start" id="fec_start" class="form-control">
                        Fecha Fin :
                        <input type="date" name="fec_end" id="fec_end" class="form-control">
                        Fecha Fecha de Certificación :

                        <input type="date" name="date_certification" id="date_certification" class="form-control">
                        Hora Inicio :
                        <input type="time" name="hour_start" id="hour_start" class="form-control" value="19:00:00">
                        Hora Fin :
                        <input type="time" name="hour_end" id="hour_end" class="form-control"value="22:00:00">
                        Horarios :
                        <select name="schedule" id="schedule" class="form-control">
                            @foreach ($schedule as $item)
                                <option value="{{ $item->id }}">{{ $item->description }}</option>
                            @endforeach
                        </select>
                        Asistente
                        <select name="assistance" id="assistance" class="form-control">
                            @foreach ($assistant as $item)
                                <option value="{{ $item->id }}">{{ $item->description }} </option>
                            @endforeach
                        </select>
                        Disponible
                        <select name="state" id="state" class="form-control">

                            <option value="disabled">No</option>
                            <option value="enabled">Si</option>
                        </select>
                        Cantidad de Certificados :
                        <input type="number" name="count_notes" id="count_notes" class="form-control"value="1">
                        Detalles :
                        <textarea type="text" name="detail" id="detail" class="form-control"></textarea>
                    </form>
                </div>
                <div class="modal-footer"style="font-family:Montserrat-Bold">
                    <input type="button" value="Nuevo" class="btn"
                        style="font-family:Montserrat-SemiBold;background-color:#023039;color:#ffffff"
                        onclick="New();$('#registry')[0].reset();" name="new">
                    <input type="button" value="Guardar" class="btn btn-success"id="create" onclick="registryStore()"
                        name="create">
                    <input type="button" value="Modificar" class="btn btn-danger"id="update"
                        onclick="registryUpdate();" name="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>
@endsection

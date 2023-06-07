@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Certificados</h1>
                    {{ session('success') }}
                    efefe {{Session::get('registry_detail_id')}}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Certificados - Plantillas</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    @role('Coordinación|Administrador')
          <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        onclick="New();$('#certification')[0].reset();">
        Agregar
    </button>
    @endrole

    <p></p>


    <p></p>
    <!-- /.content -->
    {{-- {{ $certification->onEachSide(5)->links() }} --}}
    <div id="mycontent">
        @include('certification_maintenancetable')
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mantenimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form" id="certification" name="form">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}
                        Descripción : <input type="text" name="description" id="description" class="form-control">

                        Detalle : <input type="text" name="detail" id="detail" class="form-control">
                        Cursos :
                        <select name="course_id" id="course_id" class="form-control">
                            @foreach ($course as $item)
                                <option value="{{ $item->id }}">{{ $item->description }}
                                    -{{ $item->type->description }} </option>
                            @endforeach
                        </select>
                </div>
                <div class="modal-footer">
                    <input type="button" value="Nuevo" class="btn btn-warning"
                        onclick="New();$('#certification')[0].reset();" name="new">
                    <input type="button" value="Guardar" class="btn btn-success"id="create"
                        onclick="certificationStore()" name="create">
                    <input type="button" value="Modificar" class="btn btn-danger"id="update"
                        onclick="certificationUpdate();" name="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

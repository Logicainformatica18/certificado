@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Preguntas</h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Preguntas</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    @role('Coordinación|Administrador')
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
            onclick="New();$('#exam')[0].reset();">
            Agregar
        </button>
    @endrole


    <p></p>
    <!-- /.content -->
    {{-- {{ $exam->onEachSide(5)->links() }} --}}
    <div id="mycontent">
        @include('examtable')
    </div>


    <!-- Modal -->
    @role('Coordinación|Administrador')
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
                    <form action="" method="post" role="form" id="exam" name="exam">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}
                        Pregunta : <input type="text" name="ask" id="ask" class="form-control">
                        Alternativa 1 : <input type="text" name="alternative1" id="alternative1" class="form-control">
                        Alternativa 2 : <input type="text" name="alternative2" id="alternative2" class="form-control">
                        Alternativa 3 : <input type="text" name="alternative3" id="alternative3" class="form-control">
                        Alternativa 4 : <input type="text" name="alternative4" id="alternative4" class="form-control">
                        Corecto :
                        <select name="answer" id="answer" class="form-control">
                            <option value="1">Alternativa 1</option>
                            <option value="2">Alternativa 2</option>
                            <option value="3">Alternativa 3</option>
                            <option value="4">Alternativa 4</option>
                        </select>


                </div>
                <div class="modal-footer">
                    <input type="button" value="Nuevo" class="btn btn-warning" onclick="New();$('#exam')[0].reset();"
                        name="new">
                    <input type="button" value="Guardar" class="btn btn-success"id="create" onclick="examStore()"
                        name="create">
                    <input type="button" value="Modificar" class="btn btn-danger"id="update" onclick="examUpdate();"
                        name="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endrole


@endsection

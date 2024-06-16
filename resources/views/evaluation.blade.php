@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <p></p><div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="font-family:Montserrat-Bold;color:#1b3d6d">Exámenes</h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active" style="color:#1b3d6d">Exámenes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#evaluationpleModal"
        onclick="New();$('#evaluation')[0].reset();">
        Agregar
    </button>
   

    <p></p>
    <!-- /.content -->
    {{-- {{ $evaluation->onEachSide(5)->links() }} --}}
    <div id="mycontent">
        @include('evaluationtable')
    </div>


    <!-- Modal -->
    <div class="modal fade" id="evaluationpleModal" tabindex="-1" role="dialog" aria-labelledby="evaluationpleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="evaluationpleModalLabel"style="font-color:#1b3d6d;font-family:Montserrat-Bold">Mantenimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form" id="evaluation" name="evaluation">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}
                        Descripción : <input type="text" name="description" id="description" class="form-control">
                        Detalle : <input type="text" name="detail" id="detail" class="form-control">
                      
                </div>
                <div class="modal-footer"style="font-family:Montserrat-Bold">
                    <input type="button" value="Nuevo" class="btn" style="font-family:Montserrat-SemiBold;background-color:#5a86ea;color:#ffffff" onclick="New();$('#evaluation')[0].reset();"
                        name="new">
                    <input type="button" value="Guardar" class="btn btn-success"id="create" onclick="evaluationStore()"
                        name="create">
                    <input type="button" value="Modificar" class="btn btn-danger"id="update" onclick="evaluationUpdate();"
                        name="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

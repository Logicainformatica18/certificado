@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <p></p><div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="font-family:Montserrat-Bold;color:#1b3d6d">Preguntas</h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active" style="color:#1b3d6d">Preguntas</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#questionpleModal"
        onclick="New();$('#question')[0].reset();">
        Agregar
    </button>
   

    <p></p>
    <!-- /.content -->
    {{-- {{ $question->onEachSide(5)->links() }} --}}
    <div id="mycontent">
        @include('questiontable')
    </div>


    <!-- Modal -->
    <div class="modal fade" id="questionpleModal" tabindex="-1" role="dialog" aria-labelledby="questionpleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="questionpleModalLabel"style="font-color:#1b3d6d;font-family:Montserrat-Bold">Mantenimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form" id="question" name="question">
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
                <div class="modal-footer"style="font-family:Montserrat-Bold">
                    <input type="button" value="Nuevo" class="btn" style="font-family:Montserrat-SemiBold;background-color:#5a86ea;color:#ffffff" onclick="New();$('#question')[0].reset();"
                        name="new">
                    <input type="button" value="Guardar" class="btn btn-success"id="create" onclick="questionStore()"
                        name="create">
                    <input type="button" value="Modificar" class="btn btn-danger"id="update" onclick="questionUpdate();"
                        name="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

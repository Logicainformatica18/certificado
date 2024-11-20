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
                        <li class="breadcrumb-item active" style="color:#1b3d6d">Preguntas {{ session('certification_id') }} </li>
                    </ol>

                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>
    @role('Coordinación|Administrador')
        <div class="row">
            <div class="col col-sm-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                    onclick="New();$('#exam')[0].reset();">
                    Agregar
                </button>
                <p></p>
            </div>
        
            <div class="col col-sm-12">
                <form action="{{ route('exams.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>

            </div>
            <div class="col  col-sm-12 col-xs-12 col-md-12 col-xl-12">
                <button type="submit" class="btn btn-success">Importar</button>
                </form>
            </div>

        </div>
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
                        <h5 class="modal-title" id="exampleModalLabel"style="font-color:#1b3d6d;font-family:Montserrat-Bold"style="font-color:#1b3d6d;font-family:Montserrat-Bold">Mantenimiento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" role="form" id="exam" name="exam">
                            <input type="hidden" name="id" id="id">
                            {{ csrf_field() }}
                            Pregunta : <input type="text" name="ask" id="ask" class="form-control">
                            <div class="container align-content-center">
                                <div class="form-group row">
                                    Imagen Pregunta
                                    <div class="col-sm-1"></div>
                                    <div class="btn btn-default btn-file col-9">
                                        <i class="fas fa-paperclip"></i> Subir
                                        <input type='file' id="imgInp" name="question_image"
                                            onchange="readImage(this,'#blah1');">
                                    </div>


                                </div>
                                <div class="size-100">
                                    <br>
                                    <img id="blah1" name="fotografia" src="https://placehold.co/150" alt="Tu imagen"
                                        class="img-bordered" width="40%">
                                </div>
                            </div>
                            Alternativa 1 : <input type="text" name="alternative1" id="alternative1" class="form-control">
                            <div class="container align-content-center">
                                <div class="form-group row">
                                    Imagen Pregunta
                                    <div class="col-sm-1"></div>
                                    <div class="btn btn-default btn-file col-9">
                                        <i class="fas fa-paperclip"></i> Subir
                                        <input type='file' id="imgInp" name="image1"
                                            onchange="readImage(this,'#blah2');">
                                    </div>


                                </div>
                                <div class="size-100">
                                    <br>
                                    <img id="blah2" name="fotografia" src="https://placehold.co/150" alt="Tu imagen"
                                        class="img-bordered" width="40%">
                                </div>
                            </div>
                            Alternativa 2 : <input type="text" name="alternative2" id="alternative2" class="form-control">
                            <div class="container align-content-center">
                                <div class="form-group row">
                                    Imagen Pregunta
                                    <div class="col-sm-1"></div>
                                    <div class="btn btn-default btn-file col-9">
                                        <i class="fas fa-paperclip"></i> Subir
                                        <input type='file' id="imgInp" name="image2"
                                            onchange="readImage(this,'#blah3');">
                                    </div>


                                </div>
                                <div class="size-100">
                                    <br>
                                    <img id="blah3" name="fotografia" src="https://placehold.co/150"
                                        alt="Tu imagen" class="img-bordered" width="40%">
                                </div>
                            </div>
                            Alternativa 3 : <input type="text" name="alternative3" id="alternative3"
                                class="form-control">
                            <div class="container align-content-center">
                                <div class="form-group row">
                                    Imagen Pregunta
                                    <div class="col-sm-1"></div>
                                    <div class="btn btn-default btn-file col-9">
                                        <i class="fas fa-paperclip"></i> Subir
                                        <input type='file' id="imgInp" name="image3"
                                            onchange="readImage(this,'#blah4');">
                                    </div>


                                </div>
                                <div class="size-100">
                                    <br>
                                    <img id="blah4" name="fotografia" src="https://placehold.co/150"
                                        alt="Tu imagen" class="img-bordered" width="40%">
                                </div>
                            </div>
                            Alternativa 4 : <input type="text" name="alternative4" id="alternative4"
                                class="form-control">
                            <div class="container align-content-center">
                                <div class="form-group row">
                                    Imagen Pregunta
                                    <div class="col-sm-1"></div>
                                    <div class="btn btn-default btn-file col-9">
                                        <i class="fas fa-paperclip"></i> Subir
                                        <input type='file' id="imgInp" name="image4"
                                            onchange="readImage(this,'#blah5');">
                                    </div>


                                </div>
                                <div class="size-100">
                                    <br>
                                    <img id="blah5" name="fotografia" src="https://placehold.co/150"
                                        alt="Tu imagen" class="img-bordered" width="40%">
                                </div>
                            </div>
                            Corecto :
                            <select name="answer" id="answer" class="form-control">
                                <option value="1">Alternativa 1</option>
                                <option value="2">Alternativa 2</option>
                                <option value="3">Alternativa 3</option>
                                <option value="4">Alternativa 4</option>
                            </select>


                    </div>
                    <div class="modal-footer"style="font-family:Montserrat-Bold">
                        <input type="button" value="Nuevo" class="btn" style="font-family:Montserrat-SemiBold;background-color:#023039;color:#ffffff" onclick="New();$('#exam')[0].reset();"
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

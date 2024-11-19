@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <p></p><div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="font-family:Montserrat-Bold;color:#1b3d6d">Publicaciones - {{$topic[0]->course->description}}  </h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active" style="color:#1b3d6d">Publicaciones - {{$topic[0]->course->description}}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <script>
      function  reset_textarea(){
       // JavaScript para establecer el contenido del textarea
      // document.getElementsByClassName('note-editable')[0].innerHTML = "hola";
                // JavaScript para establecer el contenido del textarea
     document.getElementsByClassName('note-editable')[0].innerHTML = "";
        }
              
    </script>
    <!-- Button trigger modal -->
    {{-- <button type="button"style="border-radius:20px;background-color:#5a86ea;color:white" class="btn" data-toggle="modal"
    data-target="#exampleModal"
    onclick="New();$('#topic')[0].reset();">
    <span style="font-family: Montserrat-Bold;font-size:15px">+</span> Agregar
</button> --}}

    <p></p>
    <form action="" method="post" role="form" id="topic" name="form">
        <input type="hidden" name="id" id="id">
        {{ csrf_field() }}
        Descripción : <input type="text" name="description" id="description" class="form-control">
          <p>
            <div class="container-fluid">
                <div class="form-group row">
                    <br>
                    Imagen Principal
                    <p></p>
                    <div class="col-10">
                    </div>
                    <div class="btn btn-default btn-file col-2">
                        <i class="fas fa-paperclip"></i> Subir
                        <input type='file' id="imgInp" name="photo" onchange="readImage(this,'#blah');">
                    </div>
                    <div class="col-8">
                    </div>
                    <div class="size-10 container-fluid col-12">
                        <br>
                        <img id="blah" name="fotografia" src="https://placehold.co/500x350" alt="Tu imagen"
                            class="img-bordered" width="250px">
                            <p></p>
                    </div>  
    
                </div>
                 
            </div>
            
        </p>   

        Contenido :
        <textarea id="summernote"style="height:'900px'" name="post">
           
            <p></p>
          </textarea>
      
        Detalle : <input type="text" name="detail" id="detail" class="form-control">
        Instrucciones :
        <textarea class="form-control" rows="6"name="instruction"id="instruction"> </textarea>
        Puntos : 
        <input type="number" name="point" id="point" class="form-control" value="0">
       <p></p>


<p></p>
    <input type="button" value="Nuevo" class="btn" style="font-family:Montserrat-SemiBold;background-color:#5a86ea;color:#ffffff" onclick="New();$('#topic')[0].reset();reset_textarea();"
        name="new">
    <input type="button" value="Guardar" class="btn btn-success"id="create" onclick="topicStore()"
        name="create">
    <input type="button" value="Modificar" class="btn btn-danger"id="update" onclick="topicUpdate();"
        name="update">
        
    </form>

    <p></p>
    <!-- /.content -->
    {{-- {{ $topic->onEachSide(5)->links() }} --}}
    <div id="mycontent">
        @include('topictable')
    </div>


    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <form action="" method="post" role="form" id="topic" name="form">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}
                        Descripción : <input type="text" name="description" id="description" class="form-control">
                             
                        Contenido :
                        <textarea id="summernote"style="height:'900px'" name="post">
                           
                            <p></p>
                          </textarea>
                      
                        Detalle : <input type="text" name="detail" id="detail" class="form-control">
                        Instrucciones :
                        <textarea class="form-control" rows="4"name="instruction"id="instruction"> </textarea>
                        Puntos : 
                        <input type="number" name="point" id="point" class="form-control" value="0">
                  

                       
                       
                        
                </div>
                <div class="modal-footer"style="font-family:Montserrat-Bold">
                    <input type="button" value="Nuevo" class="btn" style="font-family:Montserrat-SemiBold;background-color:#5a86ea;color:#ffffff" onclick="New();$('#topic')[0].reset();"
                        name="new">
                    <input type="button" value="Guardar" class="btn btn-success"id="create" onclick="topicStore()"
                        name="create">
                    <input type="button" value="Modificar" class="btn btn-danger"id="update" onclick="topicUpdate();"
                        name="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai",
                
            });
        })
         // Si deseas cambiar el texto después de la inicialización, puedes hacerlo así:
    $('#summernote').summernote('code', '<p> </p>');
    </script>
@endsection

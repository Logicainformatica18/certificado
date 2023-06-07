    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-header">
                            <h3 class="card-title">Preguntas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">



                            @foreach ($exam as $exams)
                                <div class="row page" style="display: none;">
                                    <form action="" method="post" role="form" id="qualification{{$exams->id}}" name="qualification">
                                        <input type="hidden" name=""value="{{ $exams->id }}">
                                        <input type="hidden" name="exam_id"value="{{ $exams->id }}">
                                        {{ csrf_field() }}
                                        <h1><b>{{ $exams->ask }}</b> </h1>
                                        <div class="col col-lg-12 ">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><input type="radio" name="option"
                                                            value="1"></span>
                                                </div>
                                                <input type="text" class="form-control"
                                                    value="{{ $exams->alternative1 }}">
                                            </div>
                                            <p></p>
                                        </div>
                                        <div class="col col-lg-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><input type="radio" name="option"
                                                            value="2"></span>
                                                </div>
                                                <input type="text" class="form-control"
                                                    value="{{ $exams->alternative2 }}">
                                            </div>
                                            <p></p>
                                        </div>
                                        <div class="col col-lg-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><input type="radio" name="option"
                                                            value="3"></span>
                                                </div>
                                                <input type="text" class="form-control"
                                                    value="{{ $exams->alternative3 }}">
                                            </div>
                                            <p></p>
                                        </div>

                                        <div class="col col-lg-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><input type="radio" name="option"
                                                            value="4"></span>
                                                </div>
                                                <input type="text" class="form-control"
                                                    value="{{ $exams->alternative4 }}">
                                            </div>
                                        </div>
                                        <p></p>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn btn-warning btn-lg" id="prev">Anterior</button>
                                            &nbsp;&nbsp;&nbsp;

                                            <button id="next" class="btn btn-success btn-lg"
                                                onclick="qualificationStore({{$exams->id}}); return false">Siguiente</button>
                                        </div>
                                </div>
                                <p></p>

                                </form>
                                <!-- <button class="note-icon-pencil" ></button> -->
                            @endforeach

                            <p></p>



                            {{-- <div class="page" style="display: none;">Contenido de la página 1</div>
<div class="page" style="display: none;">Contenido de la página 2</div>
<div class="page" style="display: none;">Contenido de la página 3</div> --}}
                            <!-- Añade más divs de página aquí si lo necesitas -->


                            <script>
                                var pageIndex = 0;
                                var pages = document.getElementsByClassName('page');

                                function showPage(index) {
                                    if (index < 0 || index >= pages.length) {
                                        return; // No hace nada si el índice está fuera de los límites
                                    }

                                    // Oculta la página actual
                                    if (pageIndex < pages.length) {
                                        pages[pageIndex].style.display = 'none';
                                    }

                                    // Muestra la página solicitada
                                    pages[index].style.display = 'block';

                                    // Actualiza el índice de la página
                                    pageIndex = index;
                                }

                                // Muestra la primera página al inicio
                                showPage(0);

                                // Añade los controladores de eventos a los botones
                                document.getElementById('prev').addEventListener('click', function() {
                                    showPage(pageIndex - 1);
                                });
                                document.getElementById('next').addEventListener('click', function() {
                                    showPage(pageIndex + 1);
                                });
                            </script>









                            @role('Coordinación|Administrador')
                                <table id="example1" class="table table-bordered table-striped table-responsive">
                                    <thead>
                                        <th></th>
                                        <th class="sorting">ID</th>
                                        <th class="sorting">Pregunta</th>
                                        <th class="sorting">Alternativa 1</th>
                                        <th class="sorting">Alternativa 2</th>
                                        <th class="sorting">Alternativa 3</th>
                                        <th class="sorting">Alternativa 4</th>
                                        @role('Coordinación|Administrador')
                                            <th class="sorting">Correcto</th>
                                        @endrole

                                        <th><img width="20"
                                                src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg"
                                                alt="" srcset=""></th>
                                    </thead>
                                    <tbody>
                                        @foreach ($exam as $exams)
                                            <tr>
                                                <td></td>
                                                <td>{{ $exams->id }}</td>
                                                <td>{{ $exams->ask }}</td>
                                                <td>{{ $exams->alternative1 }}</td>
                                                <td>{{ $exams->alternative2 }}</td>
                                                <td>{{ $exams->alternative3 }}</td>
                                                <td>{{ $exams->alternative4 }}</td>
                                                @role('Coordinación|Administrador')
                                                    <td> Alternativa {{ $exams->answer }}</td>
                                                @endrole
                                                <td>
                                                    @role('Coordinación|Administrador')
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-success note-icon-pencil"
                                                            data-toggle="modal" data-target="#exampleModal"
                                                            onclick="examEdit('{{ $exams->id }}'); Up();  return false"></button>

                                                        <!-- <button class="note-icon-pencil" ></button> -->
                                                        <button class="btn btn-danger note-icon-trash"
                                                            onclick="examDestroy('{{ $exams->id }}'); return false"></button>
                                                    @endrole
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            @endrole
                            <!-- DataTables -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

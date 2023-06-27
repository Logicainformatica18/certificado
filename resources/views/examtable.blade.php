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



                     

                            <p></p>



                            {{-- <div class="page" style="display: none;">Contenido de la página 1</div>
<div class="page" style="display: none;">Contenido de la página 2</div>
<div class="page" style="display: none;">Contenido de la página 3</div> --}}
                            <!-- Añade más divs de página aquí si lo necesitas -->


                        






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
                                    @php
                                        $enumeracion =0;
                                    @endphp
                                        @foreach ($exam as $exams)
                                            <tr>
                                                <td></td>
                                                <td>{{ $enumeracion = $enumeracion +1 }}</td>
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

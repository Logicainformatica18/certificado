    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-header">
                            <h3 class="card-title">Tabla de mantenimiento</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <!-- DataTables -->
                            <table id="questionple1" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <th></th>
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Pregunta</th>
                                    <th class="sorting">Alternativa 1</th>
                                    <th class="sorting">Alternativa 2</th>
                                    <th class="sorting">Alternativa 3</th>
                                    <th class="sorting">Alternativa 4</th>
                                    <th class="sorting">Correcto</th>
                                    <th><img width="20"
                                            src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg"
                                            alt="" srcset=""></th>
                                </thead>
                                <tbody>
                                    @foreach ($question as $questions)
                                        <tr>
                                            <td></td>
                                            <td>{{ $questions->id }}</td>
                                            <td>{{ $questions->ask }}</td>
                                            <td>{{ $questions->alternative1 }}</td>
                                            <td>{{ $questions->alternative2 }}</td>
                                            <td>{{ $questions->alternative3 }}</td>
                                            <td>{{ $questions->alternative4 }}</td>
                                            <td> Alternativa {{ $questions->answer }}</td>
                                            <td>
                                                @role('Coordinación|Administrador')
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success note-icon-pencil"
                                                        data-toggle="modal" data-target="#questionpleModal"
                                                        onclick="questionEdit('{{ $questions->id }}'); Up();  return false"></button>

                                                    <!-- <button class="note-icon-pencil" ></button> -->
                                                    <button class="btn btn-danger note-icon-trash"
                                                        onclick="questionDestroy('{{ $questions->id }}'); return false"></button>
                                                @endrole
                                               
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-header">
                            <h3 class="card-title"style="font-family:Montserrat-Bold">Tabla de mantenimiento</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <!-- DataTables -->
                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <th></th>
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Curso</th>
                                    <th class="sorting">Descripción</th>
 
                                    <th class="sorting">Puntos</th>
                                    <th class="sorting">Vista Previa</th>
                                    <th class="sorting">Detalle</th>
                                    <th><img width="20"
                                            src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                                            srcset=""></th>
                                </thead>
                                <tbody>
                                    @foreach ($topic as $topics)
                                        <tr>
                                            <td></td>
                                            <td>{{ $topics->id }}</td>
                                            <td>{{ $topics->course->description }}</td>
                                            <td>{{ $topics->description }}</td>
                                            <td>{{ $topics->point }}</td>
                                            <td><a target="_blank" href="cursos/{{$topics->course->id}}/tema/{{$topics->id}}">Ver</a> </td>
                                            <td>{{ $topics->detail }}</td>
                                

                                            <td>
                                                @role('Coordinación|Administrador')
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success note-icon-pencil"
                                                        data-toggle="modal" data-target="#exampleModal"
                                                        onclick="topicEdit('{{ $topics->id }}'); Up();  return false"></button>

                                                    <!-- <button class="note-icon-pencil" ></button> -->
                                                    <button class="btn btn-danger note-icon-trash"
                                                        onclick="topicDestroy('{{ $topics->id }}'); return false"></button>
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

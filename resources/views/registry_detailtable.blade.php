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
                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <th ></th>
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Paterno</th>
                                    <th class="sorting">Materno</th>
                                    <th class="sorting">Nombres</th>
                                    <th class="sorting">Dni</th>
                                    <th class="sorting">Email</th>
                                    <th class="sorting">Nota 1</th>
                                    <th class="sorting">Nota 2</th>
                                    <th class="sorting">Nota 3</th>
                                    <th class="sorting">Detalle Estudiante</th>
                                    <th ><img width="20" src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg" alt="" srcset=""></th>
                                </thead>
                                <tbody>
                                    @foreach ($registry_detail as $registry_details)
                                        <tr>
                                            <td></td>
                                            <td>{{ $registry_details->id }}</td>
                                            <td>
                                                {{$registry_details->student->user->names }}
                                            </td>
                                            <td>
                                                {{$registry_details->student->user->firstname }}
                                            </td>
                                            <td>
                                                {{$registry_details->student->user->lastname }}
                                            </td>
                                            <td>
                                                {{$registry_details->student->user->dni }}

                                            </td>
                                            <td>
                                                {{$registry_details->student->user->email }}
                                            </td>
                                            <td>
                                                {{$registry_details->n1}}
                                            </td>
                                            <td>
                                                {{$registry_details->n2}}
                                            </td>
                                            <td>
                                                {{$registry_details->n3}}
                                            </td>
                                            <td>
                                                {{$registry_details->student->user->detalle }}
                                            </td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="registry_detailEdit('{{ $registry_details->id }}'); Up();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <a class="btn btn-warning note-icon-pencil" onclick="registry_detailDetail('{{ $registry_details->id }}')" href="{{route('registros_mantenimiento.index')}}"></a>
                                                <button class="btn btn-danger note-icon-trash" onclick="registry_detailDestroy('{{ $registry_details->id }}'); return false"></button>

                                                    <!-- <button class="note-icon-pencil" ></button> -->
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


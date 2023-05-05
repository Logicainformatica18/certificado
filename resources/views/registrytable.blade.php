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
                                    <th class="sorting">Código</th>
                                    <th class="sorting">Curso</th>
                                    <th class="sorting">Docente</th>
                                    <th class="sorting">Fecha Inicio</th>
                                    <th class="sorting">Fecha Fin</th>
                                    <th class="sorting">Hora Inicio</th>
                                    <th class="sorting">Hora Fin</th>
                                    <th class="sorting">Frecuencia</th>

                                    <th class="sorting">Tipo</th>
                                    <th ><img width="20" src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg" alt="" srcset=""></th>
                                </thead>
                                <tbody>
                                    @foreach ($registry as $registrys)
                                        <tr>
                                            <td></td>
                                            <td>{{ $registrys->id }}</td>
                                            <td>{{ $registrys->course }}</td>
                                            <td>

                                                {{$registrys->firstname}}
                                                {{$registrys->lastname}}
                                                {{$registrys->names}}

                                            </td>
                                                <td>{{ $registrys->fec_start }}</td>
                                                <td>{{ $registrys->fec_end }}</td>
                                                <td>{{ $registrys->hour_start }}</td>
                                                <td>{{ $registrys->hour_end }}</td>
                                                <td>{{ $registrys->schedule }} </td>


                                                <td>{{$registrys->type}} </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="registryEdit('{{ $registrys->id }}'); Up();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <a class="btn btn-warning note-icon-pencil" onclick="registryDetail('{{ $registrys->id }}')" href="{{route('registros_mantenimiento.index')}}"></a>
                                                <button class="btn btn-danger note-icon-trash" onclick="registryDestroy('{{ $registrys->id }}'); return false"></button>

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


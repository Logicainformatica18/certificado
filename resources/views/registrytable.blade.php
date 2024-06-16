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
                                <thead style="font-family:Montserrat-Bold">
                                    <th></th>
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Código</th>
                                    <th class="sorting">Curso</th>
                                    <th class="sorting">Edición</th>
                                    <th class="sorting">Docente</th>
                                    <th class="sorting">Tipo </th>
                                    <th class="sorting">Frecuencia</th>
                                    <th class="sorting">Fecha Inicio</th>
                                    <th class="sorting">Fecha Fin</th>
                                        <th class="sorting">N° Certificados</th>
                                    <th class="sorting">Fecha de Certificación</th>
                                    <th class="sorting">Hora Inicio</th>
                                    <th class="sorting">Hora Fin</th>
                                    <th class="sorting">Tipo de Curso</th>
                                          <th class="sorting">Disponible</th>
                                    <th><img width="20"
                                            src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png"
                                            alt="" srcset=""></th>
                                </thead>
                                <tbody>
                                    @foreach ($registry as $registrys)
                                        <tr>
                                            <td></td>
                                            <td>{{ $registrys->id }}</td>
                                            <td>{{ $registrys->description }}</td>
                                            <td>{{ $registrys->course->description }}</td>
                                            <td>{{ $registrys->edition }}</td>
                                            <td>
                                                {{ $registrys->model_has_role->teacher->firstname }}
                                                {{ $registrys->model_has_role->teacher->lastname }}
                                                {{ $registrys->model_has_role->teacher->names }}


                                            </td>
                                            <td>{{ $registrys->type }}</td>
                                            <td>{{ $registrys->schedule->description }} </td>
                                            <td>{{ $registrys->fec_start }}</td>
                                            <td>{{ $registrys->fec_end }}</td>
                                             <td>{{ $registrys->count_notes }}</td>
                                            <td>{{ $registrys->date_certification }}</td>
                                            <td>{{ $registrys->hour_start }}</td>
                                            <td>{{ $registrys->hour_end }}</td>


                                            <td>{{ $registrys->course->type->description }} </td>
   <td>{{ $registrys->state }} </td>
                                            <td>
                                                @role('Coordinación')
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success note-icon-pencil"
                                                        data-toggle="modal" data-target="#exampleModal"
                                                        onclick="registryEdit('{{ $registrys->id }}'); Up();  return false"></button>
                                                    <!-- <button class="note-icon-pencil" ></button> -->
                                                    <a class="btn btn-warning note-icon-pencil"
                                                        onclick="registryDetail('{{ $registrys->id }}')"></a>
                                                    <button class="btn btn-danger note-icon-trash"
                                                        onclick="registryDestroy('{{ $registrys->id }}'); return false"></button>
                                                @endrole
                                                @role('Docente')
                                                 <a class="btn btn-warning note-icon-pencil"
                                                        onclick="registryDetail('{{ $registrys->id }}')"></a>
                                                @endrole



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

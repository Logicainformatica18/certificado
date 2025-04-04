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
                            <table id="registry_detail" class="table table-bordered table-striped table-responsive">
                                <thead style="font-family:Montserrat-Bold">
                                    <th></th>
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Curso - Programa</th>

                                    <th class="sorting">Edición</th>
                                    <th><img width="20"
                                            src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png"
                                            alt="" srcset=""></th>
                                </thead>
                                <tbody>
                                    @foreach ($registry_detail as $registry_details)
                                        <tr>
                                            <td></td>
                                            <td>{{ $registry_details->id }}</td>
                                            <td>{{ $registry_details->registry->course->description }}</td>
                                            <td>{{ $registry_details->registry->edition }}</td>
                                            <td>
                                                @role('Socio-comercial|Administrador')
                                                   <a class="btn btn-warning note-icon-pencil"
                                                        onclick="courseDetail('{{ $registry_details->registry->course->id }}')"> Evaluarme</a>
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

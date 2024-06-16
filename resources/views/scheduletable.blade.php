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
                                    <th ></th>
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Descripción</th>
                                    <th class="sorting">Detalle</th>
                                    <th ><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt="" srcset=""></th>
                                </thead>
                                <tbody>
                                    @foreach ($schedule as $schedules)
                                        <tr>
                                            <td></td>
                                            <td>{{ $schedules->id }}</td>
                                            <td>{{ $schedules->description }}</td>
                                            <td>{{ $schedules->detail }}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="scheduleEdit('{{ $schedules->id }}'); Up();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <button class="btn btn-danger note-icon-trash" onclick="scheduleDestroy('{{ $schedules->id }}'); return false"></button>
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


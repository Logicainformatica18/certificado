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
                                    <th class="sorting">Descripción</th>
                                    <th class="sorting">Tipo</th>
                                       <th class="sorting">Carpeta Certificado</th>
                                         <th class="sorting">Horas</th>
                                    <th class="sorting">Detalle</th>
                                    <th class="sorting">Presentación</th>
                                    <th ><img width="20" src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg" alt="" srcset=""></th>
                                </thead>
                                <tbody>
                                    @foreach ($course as $courses)
                                        <tr>
                                            <td></td>
                                            <td>{{ $courses->id }}</td>
                                            <td>{{ $courses->description }}</td>
                                            <td>{{ $courses->type->description }}</td>
                                            <td>{{ $courses->folder_certification }}</td>
                                         <td>{{ $courses->hours }}</td>
                                            <td>{{ $courses->detail }}</td>
                                             <td><img src="{{ asset('imageusers/' . $courses->presentation) }}" alt="" srcset=""
                                                    width="100"></td>
                                         
                                            <td>
                                                         @role('Coordinación|Administrador')
                                               
                                        
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="courseEdit('{{ $courses->id }}'); Up();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <button class="btn btn-danger note-icon-trash" onclick="courseDestroy('{{ $courses->id }}'); return false"></button>
                                              @endrole
                                                 @role('Docente|Coordinación')
                                                 <a class="btn btn-warning note-icon-pencil"
                                                        onclick="courseDetail('{{ $courses->id }}')"> Certificado</a>
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


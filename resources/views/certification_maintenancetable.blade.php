    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-header">
                            <h3 class="card-title">Certificados</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <!-- DataTables -->
                            <table id="" class="table table-bordered table-striped">
                                <thead>
                                   
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Descripción</th>
                                    @role('Coordinación|Administrador')
                                        <th class="sorting">Nota</th>
                                        <th class="sorting">Detalle</th>
                                    @endrole
   <th class="sorting">Horas</th>
                        
                                    <th><img width="20"
                                            src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png"
                                            alt="" srcset=""></th>
                                </thead>
                                <tbody>
                                    @php
                                        $enumeracion = 0;
                                    @endphp
                                    @foreach ($certification as $certifications)
                                        <tr>
                                      
                                            <td>{{ $enumeracion = $enumeracion + 1 }}</td>
                                            <td>{{ $certifications->description }}</td>

                                            @role('Coordinación|Administrador')
                                                <td>{{ $certifications->note }} </td>
                                                <td>{{ $certifications->detail }}</td>
                                            @endrole
                                            <td>{{ $certifications->hours }}</td>
                                        
                                            <td>
                                                @role('Coordinación|Administrador')
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success note-icon-pencil"
                                                        data-toggle="modal" data-target="#exampleModal"
                                                        onclick="certificationEdit('{{ $certifications->id }}'); Up();  return false"></button>

                                                    <!-- <button class="note-icon-pencil" ></button> -->
                                                    <button class="btn btn-danger note-icon-trash"
                                                        onclick="certificationDestroy('{{ $certifications->id }}'); return false"></button>
                                                    <a class="btn btn-warning note-icon-pencil"
                                                        onclick="certificationDetail('{{ $certifications->id }}')">Exámen</a>
                                                @endrole
                                                {{-- @role('Socio Comercial')
                                                    <a class="btn  note-icon-pencil" style="background-color:  #023039;color:white"
                                                        onclick="qualificationStore('{{ $certifications->id }}');"> Rendir Exámen</a>
                                                @endrole
                                                 --}}
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

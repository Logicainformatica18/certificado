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
                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <th></th>

                                    <th class="sorting">Descripción</th>
                                    <th class="sorting">Curso</th>
                                    <th class="sorting">Estado</th>

                                    <th class="sorting">Docente</th>

                                    @foreach ($registry_detail as $registry_details)
                                        @for ($i = 1; $i <= $registry_details->registry->count_notes; $i++)
                                            <th class="sorting">Nota {{ $i }} </th>
                                            <th class="sorting" style="background-color: rgb(3, 206, 3)">Certificado
                                                {{ $i }} </th>
                                        @endfor
                                     
                                </thead>
                                <tbody>

                                    <tr>
                                        <td></td>

                                        <td>{{ $registry_details->code_certification }}</td>
                                        <td>{{ $registry_details->registry->course->description }}</td>
                                        <td>
                                            @if ($registry_details->average < 14)
                                                Desaprobado
                                            @else
                                                Aprobado
                                            @endif

                                        </td>

                                        <td>{{ $registry_details->registry->model_has_role->teacher->firstname }}
                                            {{ $registry_details->registry->model_has_role->teacher->last }}
                                            {{ $registry_details->registry->model_has_role->teacher->names }} </td>




                                        @for ($i = 1; $i <= $registry_details->registry->count_notes; $i++)
                                            <?php
                                            $property = 'n' . $i; // Construir la propiedad dinámicamente (n1, n2, ..., n8)
                                            ?>
                                            <td>
                                                {{ $registry_details->$property }}

                                            </td>
                                            <td>
                                                <button class="btn btn-warning"
                                                    onclick="certificationGenerate('{{ $registry_details->id }}','spanish','{{ $registry_details->code_certification }}','{{ $i }}')">Español</button>
                                                <button class="btn btn-danger"
                                                    onclick="certificationGenerate('{{ $registry_details->id }}','english','{{ $registry_details->code_certification }}','{{ $i }}')">Ingles</button>
                                            </td>
                                        @endfor
                                       
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

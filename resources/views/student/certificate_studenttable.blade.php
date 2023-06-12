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


                                    @for ($i = 1; $i <= $registry->count_notes - 1; $i++)
                                        <th class="sorting">Nota {{ $i }} </th>
                                        <th class="sorting" style="background-color: rgb(3, 206, 3)">Certificado
                                            {{ $i }} </th>
                                    @endfor

                                </thead>
                                <tbody>
                                    @foreach ($registry_detail as $registry_details)
                                        <tr>
                                            <td></td>
                                            @if ($registry_details->code_certification=="")
                                            <td>{{ $registry_details->registry->description }}</td>    
                                            @else
                                            <td>{{ $registry_details->code_certification }}</td>
                                                
                                            @endif
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




                                            @for ($i = 1; $i <= $registry_details->registry->count_notes - 1; $i++)
                                                <?php
                                                $notes = 'n' . $i; // Construir la propiedad dinámicamente (n1, n2, ..., n8)
                                                ?>
                                                <td>

                                                    {{ $registry_details->$notes }}

                                                </td>
                                                <td>
                                                    @if ($registry_details->$notes > 13.5)
                                                        <button class="btn btn-warning"
                                                            onclick="certificationGenerate('{{ $registry_details->id }}','spanish','{{ $registry_details->code_certification }}','{{ $i }}')">Español</button>

                                                        <button class="btn btn-danger"
                                                            onclick="certificationGenerate('{{ $registry_details->id }}','english','{{ $registry_details->code_certification }}','{{ $i }}')">Ingles</button>
                                                    @else
                                                        <button class="btn btn-warning" onclick=""
                                                            disabled>Español</button>
                                                        <button class="btn btn-danger" onclick=""
                                                            disabled>Ingles</button>
                                                    @endif
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

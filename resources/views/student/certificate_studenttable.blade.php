    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-header">
                            


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <!-- DataTables -->
                            <table id="" class="table table-bordered table-striped table-responsive">
                                <thead style="font-size: 12px; text-align:center">
                          

                                    <th class="sorting">Código</th>
                                    <th class="sorting">Curso</th>
                                    <th class="sorting">Estado</th>

                                    <th class="sorting">Docente</th>


                                    @for ($i = 1; $i <= $registry->count_notes - 1; $i++)
                                        <th class="sorting"> {{ $i }} </th>
                                        <th class="sorting">Certificado
                                            {{ $i }} </th>
                                    @endfor

                                </thead>
                                <tbody>
                                    @foreach ($registry_detail as $registry_details)
                                        <tr>
                              
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
                                                 
                                                        <button class="btn " style="background-color:  #5a86ea;color:white"
                                                            onclick="certificationGenerate('{{ $registry_details->id }}','spanish','{{ $registry_details->code_certification }}','{{ $i }}')">Español</button>

                                                        <button class="btn "style="background-color:  #5a86ea;color:white"
                                                            onclick="certificationGenerate('{{ $registry_details->id }}','english','{{ $registry_details->code_certification }}','{{ $i }}')">&nbsp;Ingles&nbsp;</button>
                                                    @else
                                                        <button class="btn " onclick=""style="background-color:  #5a86ea;color:white"
                                                            disabled>Español</button>
                                                        <button class="btn " onclick=""style="background-color:  #5a86ea;color:white"
                                                            disabled>&nbsp;Ingles&nbsp;</button>
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

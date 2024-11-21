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
                                    <th></th>
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Curso</th>
                       
                                    <th class="sorting">Descripción</th>
                                    <th class="sorting">Instructor</th>
                                    <th class="sorting">Puntos</th>
                                    <th class="sorting">Ver Contenido</th>
                                   
                                    <th class="sorting">Archivos</th>
                                    <th class="sorting">PDF 1</th>
                                    <th class="sorting">PDF 2</th>
                            
                                    <th class="sorting">Categorías</th>
                                    <th class="sorting">Detalle</th>
                                    <th><img width="20"
                                            src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                                            srcset=""></th>
                                </thead>
                                <tbody>
                                    @foreach ($topic as $topics)
                                        <tr>
                                            <td></td>
                                            <td>{{ $topics->id }}</td>
                                          
                                            <td>{{ $topics->course->description }}</td>
                                            <td>{{ $topics->description }}</td>
                                            <td>{{ $topics->user->names }}</td>
                                            <td>{{ $topics->point }}</td>
                                            <td><a target="_blank" href="cursos/{{$topics->course->id}}/tema/{{$topics->id}}">Ver</a> </td>
                                            @php
                                                $url = "resource/".$topics->resource_1;
                                            @endphp
                                            <td><a target="_blank" href="{{asset($url)}}">{{ $topics->resource_1 }} </a>
                                                 </td>
                                            <td>{{ $topics->file_1 }}</td>
                                            <td>{{ $topics->file_2 }}</td>
                                          
                                     
                                            <td>
                                                @foreach ($topics->categoryDetail as $item )
                                                    {{$item->category->description." "}}
                                                @endforeach
                                            </td>
                                            <td>{{ $topics->detail }}</td>
                                            <td>
                                                @role('Coordinación|Administrador')
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success note-icon-pencil"
                                                        data-toggle="modal" data-target="#exampleModal"
                                                        onclick="topicEdit('{{ $topics->id }}'); Up();  return false"></button>

                                                    <!-- <button class="note-icon-pencil" ></button> -->
                                                    <button class="btn btn-danger note-icon-trash"
                                                        onclick="topicDestroy('{{ $topics->id }}'); return false"></button>
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

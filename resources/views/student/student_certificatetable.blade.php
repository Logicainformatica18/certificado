<div class="container">
    <p>
        &nbsp;&nbsp;&nbsp;&nbsp;
    </p>
 <h1 style="font-size: 50px"><b>{{$course[0]->description}}</b></h1>           
    <h6><b>{{$course[0]->hours}}</b></h6>
           
           <p class="text-justify">
            {{$course[0]->review}}
           </p>
           
           
   
</div>
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
                                   
                                 
                                    <th class="sorting">Descripción</th>
                                  

                                    <th class="sorting">Cantidad Preguntas</th>
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
                                      
                                           
                                            <td>{{ $certifications->description }}</td>

                                           
                                            <td>{{ $certifications->cantidad_preguntas }}</td>
                                            <td>
                                               
                                                @role('Estudiante')
                                                    <a class="btn  note-icon-pencil" style="background-color:  #5a86ea;color:white"
                                                        onclick="qualificationStore('{{ $certifications->id }}');"> Rendir Exámen</a>
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

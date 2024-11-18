    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            @php
                $enumeracion = 0;
                
            @endphp
            <div class="row">



                @foreach ($registry as $registrys)
                    <div class="col col-lg-3">


                        @php
                            $img = $registrys->course->emision;
                        @endphp
                        <div style="width: 15rem;border-radius:40px" class="card" >
                            <img src="{{ asset('imageusers/'.$img) }}" class="card-img-top" alt="..."
                            style="border-top-left-radius:40px;border-top-right-radius:40px;height:200px"
                            >
                            <div class="card-body" style="background: linear-gradient(to right, #0a2262, #0038ab);
                            border-bottom-left-radius:40px;border-bottom-right-radius:40px;
                            wwcolor:white">

                                <h5 class="card-title"style="font-family:Montserrat-Bold;
                                font-size:20px;
                                ">{{ $registrys->course->description }} </h5>
                                <div class="ribbon-wrapper">
                                    {{-- <div class="ribbon" style="background-color: #5a86ea">
                                        {{ $registrys->edition }}
                                    </div> --}}
                                </div>
                                   <p>
                                    &nbsp;
                                </p>
                                <p class="card-text"style="font-size:13px;font-family:Montserrat-Regular">
                                    Inicio: {{ substr($registrys->fec_start, 0, 11) }}
                                </p>
                             
                                @role('Estudiante')
                                    <a class="btn btn-sm" style="border-radius:15px;color:white;background-color: #5a86ea"
                                        onclick="inscriptionStore('{{ $registrys->id }}','{{Auth::user()->model_has_roles[0]->model_id}}-{{Auth::user()->model_has_roles[0]->model_type}}-{{Auth::user()->model_has_roles[0]->role_id}}')">
                                        INSCRIBIRME</a>
                                @endrole

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

  


        </div>
    </section>

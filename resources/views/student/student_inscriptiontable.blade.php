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
                            if ($img=="") {
                            $img='curso_promocion.jpg';
                            }
                        @endphp
                        <div style="width: 15rem;border-radius:40px" class="card" >
                            <img src="{{ asset('imageusers/'.$img) }}" class="card-img-top" alt="..."
                            style="border-top-left-radius:40px;border-top-right-radius:40px;height:200px"
                            >
                            <div class="card-body" style="background: linear-gradient(to left, #011316 20%, #023039 80% );
                            border-bottom-left-radius:40px;border-bottom-right-radius:40px;
                            color:white">

                                <h5 class="card-title"style="font-family:Montserrat-Bold;
                                font-size:20px;
                                ">{{ $registrys->course->description }} </h5>
                                <div class="ribbon-wrapper">
                                    {{-- <div class="ribbon" style="background-color: #023039">
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
                                    <a class="btn btn-sm" style="border-radius:15px;color:rgb(0, 0, 0);background-color: #5be8dd"
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

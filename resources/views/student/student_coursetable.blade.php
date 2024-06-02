    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            @php
                $enumeracion = 0;
                
            @endphp
            <div class="row">



                @foreach ($registry_detail as $registry_details)
                    <div class="col col-lg-3">


                        @php
                            $img = $registry_details->registry->course->detail;
                        @endphp
                        <div class="card" style="width: 15rem;">
                            <img src="{{ asset('dist/img/cursos/' . $img) }}" class="card-img-top" alt="...">
                            <div class="card-body" style="background-color: #5a86ea;color:white">
                                <h5 class="card-title">{{ $registry_details->registry->course->description }} </h5>
                                <div class="ribbon-wrapper">
                                    <div class="ribbon" style="background-color: #00cc99">
                                        {{ $registry_details->registry->edition }}
                                    </div>
                                </div>
                                   <p>
                                    &nbsp;
                                </p>
                                <p class="card-text"style="font-size:13px">
                                    {{ substr($registry_details->registry->fec_start, 0, 11) }}
                                </p>
                             
                                @role('Estudiante')
                                    <a class="btn btn-sm" style="color:white;background-color: #00cc99"
                                        onclick="courseDetailStudent('{{ $registry_details->registry->course->id }}','{{ $registry_details->id }}')">
                                        CERTIFICATE</a>
                                @endrole

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>






        </div>
    </section>

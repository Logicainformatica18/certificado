    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            @php
                $enumeracion = 0;
                
            @endphp
            <div class="row">



                @foreach ($registry_detail as $registry_details)
                    <div class="col col-lg-3">


                        <div style="width: 15rem;border-radius:40px" class="card" >
                            <img src="{{ asset('../curso_promocion.jpg') }}" class="card-img-top" alt="..."
                            style="border-top-left-radius:40px;border-top-right-radius:40px;"
                            >
                            <div class="card-body" style="background: linear-gradient(to right, #0a2262, #0038ab);
                            border-bottom-left-radius:40px;border-bottom-right-radius:40px;
                            color:white">
                                 <h5 class="card-title"style="font-family:Montserrat-Bold;
                                 font-size:20px";
                                >{{ $registry_details->registry->course->description }} </h5>
                                {{-- <div class="ribbon-wrapper">
                                    <div class="ribbon" style="background-color: #5a86ea">
                                        {{ $registry_details->registry->edition }}
                                    </div>
                                </div> --}}
                                   <p>
                                    &nbsp;
                                </p>
                                <p class="card-text"style="font-size:13px;font-family:Montserrat-Regular">
                                    {{ substr($registry_details->registry->fec_start, 0, 11) }}
                                </p>
                             
                                @role('Estudiante')
                                <a class="btn btn-sm" style="border-radius:15px;color:black;background-color: #5be8dd"
                                        onclick="courseTopic('{{ $registry_details->registry->course->id }}','{{ $registry_details->id }}')" href="#">
                                        Temario</a>
                                        <p></p>
                                        <a class="btn btn-sm" style="border-radius:15px;color:black;background-color: #5be8dd"
                                        onclick="courseDetailStudent('{{ $registry_details->registry->course->id }}','{{ $registry_details->id }}')">
                                        Certificarme</a>
                                @endrole

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>






        </div>
    </section>

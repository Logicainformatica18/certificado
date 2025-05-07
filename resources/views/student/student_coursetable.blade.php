<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        @php $enumeracion = 0; @endphp

        <div class="row">
            @foreach ($registry_detail as $registry_details)
                <div class="col-lg-3 mb-4 d-flex">
                    <div class="card w-100 h-100" style="border-radius: 40px;">
                        <img src="{{ asset('../curso_promocion.jpg') }}" class="card-img-top"
                            style="border-top-left-radius: 40px; border-top-right-radius: 40px;" alt="...">

                        <div class="card-body d-flex flex-column justify-content-between"
                            style="background: linear-gradient(to left, #011316 20%, #023039 80%);
                                   border-bottom-left-radius: 40px;
                                   border-bottom-right-radius: 40px;
                                   color: white;">

                            <div>
                                <h5 class="card-title" style="font-family: Montserrat-Bold; font-size: 20px;">
                                    {{ $registry_details->registry->course->description }}
                                </h5>
                                <p class="card-text" style="font-size: 13px; font-family: Montserrat-Regular;">
                                    {{ substr($registry_details->registry->fec_start, 0, 11) }}
                                </p>
                            </div>

                            @role('Socio-comercial')
                            <div class="mt-auto">
                                <a class="btn btn-sm mb-2 w-100" style="border-radius: 15px; color: black; background-color: #5be8dd"
                                    download="{{ $registry_details->registry->course->brochure }}"
                                    href="{{ asset('brochure/' . $registry_details->registry->course->brochure) }}">
                                    Brochure
                                </a>
                                {{-- <a class="btn btn-sm mb-2 w-100" style="border-radius: 15px; color: black; background-color: #5be8dd"
                                    onclick="courseTopic('{{ $registry_details->registry->course->id }}','{{ $registry_details->id }}')" href="#">
                                    Temario
                                </a> --}}
                                <a class="btn btn-sm mb-2 w-100"
                                style="border-radius: 15px; color: black; background-color: #5be8dd"
                                href="{{ url('temario/' . $registry_details->registry->course->id) }}">
                                Temario por categoría
                             </a>
                                <a class="btn btn-sm w-100" style="border-radius: 15px; color: black; background-color: #5be8dd"
                                    onclick="courseDetailStudent('{{ $registry_details->registry->course->id }}','{{ $registry_details->id }}')">
                                    Certificarme
                                </a>
                            </div>
                            @endrole

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

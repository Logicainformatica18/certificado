@extends('layouts.app')

@section('content')


    


    <div class="container">


        <div class="row">
            @foreach ($users->roles as $item)
                
                    @if ($item->name == 'Estudiante')
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                        <a href="{{ url($item->name) }}">
                            <div class="card"
                                style="width: 100%;background: linear-gradient(to left, #011316 20%, #023039 80% );border-radius:20px">
                                <img class="card-img-top" src="{{ asset('ESTUDIANTE.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"style="color:white ">{{ $item->name }}</h5>
                                    <p class="card-text"style="color:#ffff ">Como estudiante podrás acceder a los materiales del curso donde te haz inscrito.</p>
                                    {{-- <a href="#" class="btn btn-primary">Ingresar</a> --}}
                                </div>
                            </div>
                        </a>
                        <p></p>
                    </div>
            
              
                    @elseif($item->name == 'Coordinación')
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                        <a href="{{ url($item->name) }}">
                            <div class="card"
                                style="width: 100%;background: linear-gradient(to left, #011316 20%, #023039 80% );border-radius:20px">
                                <img class="card-img-top" src="{{ asset('COORDINACION.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"style="color:white ">{{ $item->name }}</h5>
                                    <p class="card-text"style="color:#ffff ">Como coordinador tendrán todos los permisos en el
                                        sistema.</p>
                                    {{-- <a href="#" class="btn btn-primary">Ingresar</a> --}}
                                </div>
                            </div>
                        </a>
                        <p></p>
                                            </div>
                                            
                    @elseif($item->name == 'Docente')
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                    <a href="{{ url($item->name) }}">
                        <div class="card"
                            style="width: 100%;background: linear-gradient(to left, #011316 20%, #023039 80% );border-radius:20px">
                            <img class="card-img-top" src="{{ asset('COORDINACION.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"style="color:white ">{{ $item->name }}</h5>
                                <p class="card-text"style="color:#ffff ">Como Docente podrás gestionar las calificaciones de
                                    tus estudiantes</p>
                                {{-- <a href="#" class="btn btn-primary">Ingresar</a> --}}
                            </div>
                        </div>
                    </a>
                    <p></p>
                </div>
                    @endif

               
                <p></p>
            @endforeach
        </div>

    </div>
@endsection

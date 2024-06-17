@extends('layouts.app')

@section('content')
    @foreach ($users->roles as $item)
        <div class="container">

            <a href="{{ url($item->name) }}">
                @if ($item->name == 'Estudiante')
                    <div class="card badge-primary"
                        style="background: linear-gradient(to right, #5a86ea, #0038ab);border-radius:25px">

                        <div class="row">
                            {{-- <div class="col-lg-1">
                            </div> --}}
                            <div class="col-lg-1"
                                style="margin-left: 50px;margin-right: -25px;   align-items: center;display: flex;">
                                <img src="{{ asset('ESTUDIANTE.png') }}" width="30px" alt="" srcset="" ">
                                </div>

                         <div class="col-lg-10"style=" color:black">
                                <p></p>
                                <style>
                                    .custom-container {
                                        position: relative;
                                        top: -7px;
                                        /* Ajusta este valor para mover el contenedor hacia arriba */
                                    }

                                    .custom-container h2,
                                    .custom-container .bad {
                                        position: relative;
                                        top: -7px;
                                        /* Ajusta este valor para mover los elementos hacia arriba */
                                    }
                                </style>
                                <h2><b
                                        style="margin-left:-12px;color:#ffffff;font-family:Montserrat-Bold;font-size:28px">{{ $item->name }}</b>
                                </h2>
                                <div class="custom-container">


                                </div>


                            </div>



                        </div>
                        <!-- /.card-header -->

                    </div>
                @elseif($item->name == 'Coordinación')
                    <div class="card badge-primary" style="background: linear-gradient(to right, #0A2262, #0038ab);border-radius:25px">
                        <div class="row">
                            <div class="col-lg-1"
                                style="margin-left: 50px;margin-right: -25px;   align-items: center;display: flex;">
                                <img src="{{ asset('COORDINACION.png') }}" width="30px" alt="" srcset="" ">
                                                </div>

                                                                    <div class="col-lg-10"style=" color:white">
                                <p></p>
                                <style>
                                    .custom-container {
                                        position: relative;
                                        top: -7px;
                                        /* Ajusta este valor para mover el contenedor hacia arriba */
                                    }

                                    .custom-container h2,
                                    .custom-container .bad {
                                        position: relative;
                                        top: -7px;
                                        /* Ajusta este valor para mover los elementos hacia arriba */
                                    }
                                </style>
                                 <h2><b
                                    style="margin-left:-12px;color:#ffffff;font-family:Montserrat-Bold;font-size:28px">{{ $item->name }}</b>
                            </h2>
                                <div class="custom-container">


                                </div>


                            </div>



                        </div>
                        <!-- /.card-header -->

                    </div>
                @elseif($item->name == 'Docente')
                    <div class="card badge-primary" style="background: linear-gradient(to right, #5a86ea, #0038ab);border-radius:25px">

                        <div class="row">
                            <div class="col-lg-1"
                                style="margin-left: 50px;margin-right: -25px;   align-items: center;display: flex;">
                                <img src="{{ asset('PROFESOR.png') }}" width="30px" alt="" srcset="" ">
                                                </div>

                                                                    <div class="col-lg-10"style=" color:white">
                                <p></p>
                                <style>
                                    .custom-container {
                                        position: relative;
                                        top: -7px;
                                        /* Ajusta este valor para mover el contenedor hacia arriba */
                                    }

                                    .custom-container h2,
                                    .custom-container .bad {
                                        position: relative;
                                        top: -7px;
                                        /* Ajusta este valor para mover los elementos hacia arriba */
                                    }
                                </style>
                                 <h2><b
                                    style="margin-left:-12px;color:#ffffff;font-family:Montserrat-Bold;font-size:28px">{{ $item->name }}</b>
                            </h2>
                                <div class="custom-container">


                                </div>


                            </div>



                        </div>
                        <!-- /.card-header -->

                    </div>
                @endif

            </a>

        </div>
        <p></p>
    @endforeach
@endsection

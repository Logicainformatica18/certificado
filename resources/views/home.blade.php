@extends('layouts.app')

@section('content')
    @foreach ($users->roles as $item)
        <div class="container">
            <a href="{{ url($item->name) }}">
                @if ($item->name == 'Estudiante')
                    <div class="card badge-primary" style="background-color:#00cc99">
                        <div class="row">
                            <div class="col-lg-1"
                                style="margin-left: 10px;margin-right: -25px;   align-items: center;display: flex;">
                                <img src="{{ asset('ESTUDIANTE.png') }}" width="100%" alt="" srcset="" ">
                                        </div>

                                                            <div class="col-lg-11"style="color:black">
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
                                                                <h2  ><b>{{ $item->name }}</b> </h2>
                                                                <div class="custom-container">

                                                               
                                                                </div>


                                                            </div>



                                                        </div>
                                                        <!-- /.card-header -->

                                                    </div>

                                                    @else
                                                           <div class="card badge-primary" style="background-color:#5a86ea">
                        <div class="row">
                            <div class="col-lg-1"
                                style="margin-left: 10px;margin-right: -25px;   align-items: center;display: flex;">
                                <img src="{{ asset('COORDINACION.png') }}" width="100%" alt="" srcset="" ">
                                        </div>

                                                            <div class="col-lg-11"style="color:white">
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
                                                                <h2  ><b>{{ $item->name }}</b> </h2>
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

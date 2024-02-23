@extends('template')
@section('content')
    <script></script>
    <p></p>
    <h1><b>Exámen de conocimiento</b> </h1>

    <div class="row">
        <div class="col-lg-12"style="font-size:20px">
            <b>Cronómetro: </b> <span id="countdown">Cargando...</span>
            <p> </p>
        </div>
        <div class="col-lg-12 border border-secondary" style="border-width: 2px;"></div>

        <div class="col-lg-9">

            <p></p>
            <div class="progress" style="background-color: #7cfddd; border: 2px">
                @php
                    $enumeracion = 0;
                    $porcentaje =  1 / $qualification_count  *100
             
                @endphp

                <div class="progress-bar" style="background-color: #00cc99;width: {{ $porcentaje }}%"></div>


            </div>
            <div class="text-right">1 DE {{ $qualification_count }} PREGUNTAS RESPONDIDAS</div>

        </div>
        <div class="col-lg-3">
            <p></p>
            <h5><b>Detalles e Información</b></h5>

        </div>

        <!-- /.content -->

        <div id="mycontent"class="col-lg-9">
            @include('student/student_examtable')
        </div>




        <div class="col-lg-3 d-flex flex-column border-left" style="height: 100vh;">
            <p>
                &nbsp;
                &nbsp;
                &nbsp;
            </p>
            <div class="card card-primary card-outline" id="mycontent">
                <div class="card-body box-profile" style="font-size: 12px">


                    <div class="row">
                        <div class="col-lg-3">
                            <img src="{{ asset('fecha-de-vencimiento.png') }}" alt="" width="100%">
                        </div>
                        <div class="col-lg-9">
                            <p></p>
                            <span><b>Fecha de Vencimiento de Evaluación</b></span>
                            <p></p>
                        </div>
                        <div class="col-lg-3">
                            <img src="{{ asset('intentos.png') }}" alt="" width="100%">
                        </div>
                        <div class="col-lg-9">
                            <p></p>
                            <span><b>Intentos</b></span><br>
                            <span>limitados : 2 </span>
                        </div>
                    </div>




                    <p></p>



                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <div
                                class="row input-group d-flex align-items-center"style="background-color: #003399;color:white;font-size:15px;height:60px;border-radius:8px">
                                <div class="col-lg-3">
                                    <img src="{{ asset('REGISTROS-BLANCO.png') }}" alt=""width="100%">
                                </div>
                                <div class="col-lg-4">
                                    Máximo de :
                                </div>
                                <div class="col-lg-5">
                                    20 Puntos
                                </div>



                            </div>
                            {{-- <b>Nombre completo</b>
                             <a class="float-right">Aquino
                                Bullon
                                Jorge Luis</a> --}}
                        </li>
                        <p>
                            &nbsp;
                        </p>
                        <p>
                            &nbsp;
                        </p>
                        <p>
                            &nbsp;
                        </p>
                        <p>
                            &nbsp;
                        </p>
                        <p>
                            &nbsp;
                        </p>
                        <br>
                        <li class="list-group-item center">
                            <button id="complete" class="btn  btn-lg"style="background-color:#00cc99;color:white"
                                onclick="qualificationCertification();return false">Finalizar</button>
                        </li>

                    </ul>



                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            // Recupera el tiempo de finalización guardado del LocalStorage
            var end = localStorage.getItem('end');

            // Si no hay un tiempo de finalización guardado, o si estamos después del tiempo de finalización
            if (!end || end < new Date().getTime()) {
                // Establece la hora de finalización para dentro de 1 hora y la guarda en LocalStorage
                end = new Date().getTime() + (60 * 60 * 1000); // 60 minutos * 60 segundos * 1000 milisegundos
                localStorage.setItem('end', end);
            }

            // Función de actualización del contador
            function updateCountdown() {
                // Calcula la cantidad de tiempo restante
                var now = new Date().getTime();
                var distance = end - now;

                // Si el tiempo ha terminado
                if (distance < 0) {
                    clearInterval(interval);
                    //  document.getElementById('countdown').innerHTML = "EXPIRADO";
                    alert("El tiempo ha expirado"); // Mostrar alerta
                    var button = document.getElementById("complete");
                    if (button) {
                        button.click();
                    } else {
                        console.log("Button not found");
                    }
                    return;
                }

                // Calcula horas, minutos y segundos
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Muestra el resultado
                document.getElementById('countdown').innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
            }

            // Actualiza el contador cada segundo
            var interval = setInterval(updateCountdown, 1000);
        }
    </script>
@endsection

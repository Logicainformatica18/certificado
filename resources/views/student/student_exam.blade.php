@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Preguntas</h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Preguntas</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

<h3><b>Tiempo :<p id="countdown">Cargando...</p></b></h3>


    <p></p>
    <!-- /.content -->
    {{-- {{ $exam->onEachSide(5)->links() }} --}}
    <div id="mycontent">
        @include('student/student_examtable')
    </div>



<script>
    window.onload = function() {
  // Recupera el tiempo de finalización guardado del LocalStorage
  var end = localStorage.getItem('end');

  // Si no hay un tiempo de finalización guardado, o si estamos después del tiempo de finalización
  if (!end || end < new Date().getTime()) {
    // Establece la hora de finalización para dentro de 1 hora y la guarda en LocalStorage
    end = new Date().getTime() + (30*60*1000); // 60 minutos * 60 segundos * 1000 milisegundos
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
    if(button) {
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

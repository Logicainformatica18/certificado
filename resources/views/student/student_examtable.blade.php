<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

                {{ session('success') }}
            </div>
            <div class="col-sm-6">
                {{-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Preguntas</li>
                    </ol> --}}
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<p></p>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title"><b>Preguntas</b></h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @foreach ($qualification as $qualifications)
                            @php
                                $count = $enumeracion + 1;
                            @endphp
                            <div class="row page" style="display: none;">

                                <form action="" method="post"
                                    role="form"id="qualification{{ $qualifications->id }}" name="qualification">
                                    <input type="hidden" name=""value="{{ $qualifications->id }}">


                                    <input type="hidden" name="id"value="{{ $qualifications->id }}">

                                    <input type="hidden" name="qualification_id"value="{{ $qualifications->id }}">
                                    <input type="hidden" name="answer"value="{{ $qualifications->exam->answer }}">

                                    {{ csrf_field() }}
                                    <h3><b>{{ $enumeracion = $enumeracion + 1 }}.
                                            {{ $qualifications->exam->ask }}</b> </h3>
                                    <div class="col col-lg-12 ">
                                        <div
                                            class="input-group d-flex align-items-center"style="background-color: #003399;color:white;font-size:20px;height:50px;border-radius:8px">
                                            
                                            <div
                                                class="input-group-prepend"style="background-color: #003399;border-radius:8px">
                                                <span
                                                    class="input-group-text"style="background-color: #003399;border:0px;"><input
                                                        type="radio" name="option" value="1"></span>
                                            </div>

                                            {{ $qualifications->exam->alternative1 }}
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="col col-lg-12 ">
                                        <div
                                            class="input-group d-flex align-items-center"style="background-color: #003399;color:white;font-size:20px;height:50px;border-radius:8px">
                                            
                                            <div
                                                class="input-group-prepend"style="background-color: #003399;border-radius:8px">
                                                <span
                                                    class="input-group-text"style="background-color: #003399;border:0px;"><input
                                                        type="radio" name="option" value="2"></span>
                                            </div>

                                            {{ $qualifications->exam->alternative2 }}
                                        </div>
                                        <p></p>
                                    </div>
                                    <div class="col col-lg-12 ">
                                        <div
                                            class="input-group d-flex align-items-center"style="background-color: #003399;color:white;font-size:20px;height:50px;border-radius:8px">
                                            
                                            <div
                                                class="input-group-prepend"style="background-color: #003399;border-radius:8px">
                                                <span
                                                    class="input-group-text"style="background-color: #003399;border:0px;"><input
                                                        type="radio" name="option" value="3"></span>
                                            </div>

                                            {{ $qualifications->exam->alternative3 }}
                                        </div>
                                        <p></p>
                                    </div>

                                    <div class="col col-lg-12 ">
                                        <div
                                            class="input-group d-flex align-items-center"style="background-color: #003399;color:white;font-size:20px;height:50px;border-radius:8px">
                                            
                                            <div
                                                class="input-group-prepend"style="background-color: #003399;border-radius:8px">
                                                <span
                                                    class="input-group-text"style="background-color: #003399;border:0px;"><input
                                                        type="radio" name="option" value="4"></span>
                                            </div>

                                            {{ $qualifications->exam->alternative4 }}
                                        </div>
                                        <p></p>
                                    </div>
                                    <p>
                                        &nbsp;
                                    </p>
                                    <p>
                                        &nbsp;
                                    </p>
                                    @if (!$loop->last)
                                        <div class="d-flex justify-content-end">
                                            {{-- <button class="btn btn-warning btn-lg" id="prev">Anterior</button> --}}
                                            <button id="next" class="btn btn-lg"
                                                style="background-color:#00cc99;color:white"
                                                onclick="qualificationUpdate({{ $qualifications->id }}); return false">Siguiente</button>
                                        </div>
                                    @endif
                                    @if ($loop->last)
                                        <button id="complete"
                                            class="btn  btn-lg"style="background-color:#00cc99;color:white"
                                            onclick="qualificationUpdate({{ $qualifications->id }});qualificationCertification();return false">Enviar
                                            y Finalizar</button>
                                    @endif

                            </div>



                            </form>
                            <!-- <button class="note-icon-pencil" ></button> -->
                        @endforeach

                        <p></p>

                        <form action=""id="prueba" method="post"></form>

                        {{-- <div class="page" style="display: none;">Contenido de la página 1</div>
<div class="page" style="display: none;">Contenido de la página 2</div>
<div class="page" style="display: none;">Contenido de la página 3</div> --}}
                        <!-- Añade más divs de página aquí si lo necesitas -->


                        <script>
                            var pageIndex = 0;
                            var pages = document.getElementsByClassName('page');

                            function showPage(index) {
                                if (index < 0 || index >= pages.length) {
                                    return; // No hace nada si el índice está fuera de los límites
                                }

                                // Oculta la página actual
                                if (pageIndex < pages.length) {
                                    pages[pageIndex].style.display = 'none';
                                }

                                // Muestra la página solicitada
                                pages[index].style.display = 'block';

                                // Actualiza el índice de la página
                                pageIndex = index;
                            }

                            // Muestra la primera página al inicio
                            showPage(0);

                            // Añade los controladores de eventos a los botones
                            // document.getElementById('prev').addEventListener('click', function() {
                            //     showPage(pageIndex - 1);
                            // });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

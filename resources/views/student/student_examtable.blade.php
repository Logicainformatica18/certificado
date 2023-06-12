    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-header">
                            <h3 class="card-title">Preguntas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">



                            @foreach ($qualification as $qualifications)
                                <div class="row page" style="display: none;">
                            

                                    {{-- @if (empty($qualifications->qualification))
                                        <script>
                                            alert('Por favor actualize la pagina')
                                            window.location.href = 'Mi-qualificationen';
                                        </script>
                                    @endif --}}
                                     {{-- @if (empty($qualifications->qualification->id))
                                        <script>
                                            alert('Por favor actualize la pagina')
                                            window.location.href = 'Mi-qualificationen';
                                        </script>
                                    @endif --}}


                                    <form action="" method="post"
                                        role="form"id="qualification{{ $qualifications->id }}" name="qualification">
                                        <input type="hidden" name=""value="{{ $qualifications->id }}">


                                        <input type="hidden" name="id"value="{{ $qualifications->id }}">

                                        <input type="hidden" name="qualification_id"value="{{ $qualifications->id }}">
                                        <input type="hidden" name="answer"value="{{ $qualifications->exam->answer }}">

                                        {{ csrf_field() }}
                                        <h1><b>{{ $qualifications->exam->ask }}</b> </h1>
                                        <div class="col col-lg-12 ">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><input type="radio" name="option"
                                                            value="1"></span>
                                                </div>
                                                <input type="text" class="form-control"
                                                    value="{{ $qualifications->exam->alternative1 }}" disabled>
                                            </div>
                                            <p></p>
                                        </div>
                                        <div class="col col-lg-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><input type="radio" name="option"
                                                            value="2"></span>
                                                </div>
                                                <input type="text" class="form-control"
                                                    value="{{ $qualifications->exam->alternative2 }}"disabled>
                                            </div>
                                            <p></p>
                                        </div>
                                        <div class="col col-lg-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><input type="radio" name="option"
                                                            value="3"></span>
                                                </div>
                                                <input type="text" class="form-control"
                                                    value="{{ $qualifications->exam->alternative3 }}"disabled>
                                            </div>
                                            <p></p>
                                        </div>

                                        <div class="col col-lg-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><input type="radio" name="option"
                                                            value="4"></span>
                                                </div>
                                                <input type="text" class="form-control"
                                                    value="{{ $qualifications->exam->alternative4 }}"disabled>
                                            </div>
                                        </div>
                                        <p></p>
                                        @if (!$loop->last)
                                            <div class="d-flex justify-content-center">
                                                {{-- <button class="btn btn-warning btn-lg" id="prev">Anterior</button>
                                                &nbsp;&nbsp;&nbsp; --}}

                                                <button id="next" class="btn btn-success btn-lg"
                                                    onclick="qualificationUpdate({{ $qualifications->id }}); return false">Siguiente</button>



                                            </div>
                                        @endif
                                        @if ($loop->last)
                                            <button id="complete" class="btn btn-success btn-lg"
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

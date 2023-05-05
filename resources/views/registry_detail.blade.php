@extends('template')
@section('content')


                            <!-- Content Header (Page header) -->
                            <section class="content-header">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1>Registros Mantenimiento</h1>
                                            {{ session('success') }}
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-sm-right">
                                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                                <li class="breadcrumb-item active">Registros Mantenimiento</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div><!-- /.container-fluid -->
                            </section>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal" onclick="New();$('#registry')[0].reset();">
                                Agregar
                            </button>
                            <p></p>
                            Buscar
                            <form  name="for"id="show">
                                <input type="text"name="show" class="form-control" style="width: 50%"  onkeydown="registryShow();">
                            </form>

                            <p></p>
                             <!-- /.content -->
                             {{-- {{ $registry->onEachSide(5)->links() }} --}}
                            <div id="mycontent">



                                @include("registry_detailtable")

                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Mantenimiento</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post" role="form" id="registry" name="form">
                                                <input type="hidden" name="id" id="id">
                                                {{ csrf_field() }}
                                          Descripción :      <input type="text" name="description" id="description"
                                                    class="form-control">


                                                    Fecha Inicio :
                                                    <input type="date" name="fec_start" id="fec_start" class="form-control">
                                                    Fecha Fin :
                                                    <input type="date" name="fec_end" id="fec_end" class="form-control">
                                                    Hora Inicio :
                                                    <input type="time" name="hour_start" id="hour_start" class="form-control" value="19:00:00">
                                                    Hora Fin :
                                                    <input type="time" name="hour_end" id="hour_end" class="form-control"value="22:00:00">


                                                    Detalles :      <textarea type="text" name="detail" id="detail"
                                                    class="form-control"></textarea>

                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" value="Nuevo" class="btn btn-warning"
                                                onclick="New();$('#registry')[0].reset();" name="new">
                                            <input type="button" value="Guardar" class="btn btn-success"id="create"
                                                onclick="registryStore()" name="create">
                                            <input type="button" value="Modificar" class="btn btn-danger"id="update"
                                                onclick="registryUpdate();" name="update">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


@endsection

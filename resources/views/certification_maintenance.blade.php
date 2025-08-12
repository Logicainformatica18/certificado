@extends('template')

@section('content')
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @foreach ($certification as $certificate)
                        <h1 class="mb-0">
                            <b>{{ $certificate->course->description }}</b>
                        </h1>
                        @break
                    @endforeach

                    @if (session('success'))
                        <div class="alert alert-success mt-2 mb-0">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger mt-2 mb-0">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- Breadcrumb opcional --}}
                    </ol>
                </div>
            </div>
        </div>
    </section>

    @role('Coordinación|Administrador')
        <button
            type="button"
            class="btn btn-primary"
            data-toggle="modal"
            data-target="#certificationModal"
            onclick="New(); document.getElementById('certificationForm').reset(); clearFormErrors();"
        >
            Agregar
        </button>
    @endrole

    <p></p>

    <!-- Tabla -->
    <div id="mycontent">
        @include('certification_maintenancetable')
    </div>

    <!-- Modal Crear/Editar -->
    <div class="modal fade" id="certificationModal" tabindex="-1" role="dialog" aria-labelledby="certificationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5
                        class="modal-title"
                        id="certificationModalLabel"
                        style="font-family:Montserrat-Bold"
                    >
                        Mantenimiento de Certificados
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    {{-- Rutas para usar en JS (no forzamos action para permitir fetch/AJAX) --}}


                    <form id="certification"name="certification" role="form" autocomplete="off" novalidate>
                        @csrf
                        <input type="hidden" name="id" id="id">

                        {{-- Descripción --}}
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <input
                                type="text"
                                name="description"
                                id="description"
                                class="form-control"
                                value="{{ old('description') }}"
                                maxlength="255"
                                required
                            >
                            <small class="text-danger d-none" data-error="description"></small>
                        </div>

                        {{-- Detalle --}}
                        <div class="form-group">
                            <label for="detail">Detalle</label>
                            <input
                                type="text"
                                name="detail"
                                id="detail"
                                class="form-control"
                                value="{{ old('detail') }}"
                                maxlength="255"
                            >
                            <small class="text-danger d-none" data-error="detail"></small>
                        </div>

                        {{-- Curso --}}
                        <div class="form-group">
                            <label for="course_id">Curso</label>
                            <select name="course_id" id="course_id" class="form-control" required>
                                @foreach ($course as $item)
                                    <option
                                        value="{{ $item->id }}"
                                        {{ old('course_id') == $item->id ? 'selected' : '' }}
                                    >
                                        {{ $item->description }} - {{ $item->type->description }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="text-danger d-none" data-error="course_id"></small>
                        </div>

                        {{-- Nota (campo nombre de columna dinámico que usas luego) --}}
                        <div class="form-group">
                            <label for="note">Nota</label>
                            <select name="note" id="note" class="form-control" required>
                                @for ($i = 1; $i <= 8; $i++)
                                    <option value="n{{ $i }}" {{ old('note') === "n$i" ? 'selected' : '' }}>
                                        Nota {{ $i }}
                                    </option>
                                @endfor
                            </select>
                            <small class="text-danger d-none" data-error="note"></small>
                        </div>

                        <div class="form-row">
                            {{-- Horas --}}
                            <div class="form-group col-md-6">
                                <label for="hours">Horas</label>
                                <input
                                    type="number"
                                    name="hours"
                                    id="hours"
                                    class="form-control"
                                    value="{{ old('hours', 4) }}"
                                    min="0"
                                    step="1"
                                >
                                <small class="text-danger d-none" data-error="hours"></small>
                            </div>

                            {{-- Límite --}}
                            <div class="form-group col-md-6">
                                <label for="limit">Límite</label>
                                <input
                                    type="number"
                                    name="limit"
                                    id="limit"
                                    class="form-control"
                                    value="{{ old('limit', 2) }}"
                                    min="0"
                                    step="1"
                                >
                                <small class="text-danger d-none" data-error="limit"></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="code">Código</label>
                            <input
                                type="text"
                                name="code"
                                id="code"
                                class="form-control"
                                value="{{ old('code') }}"
                                maxlength="255"
                                placeholder="Opcional (único)"
                            >
                            <small class="text-danger d-none" data-error="code"></small>
                        </div>

                        <div class="form-group">
                            <label for="url">URL</label>
                            <input
                                type="url"
                                name="url"
                                id="url"
                                class="form-control"
                                value="{{ old('url') }}"
                                maxlength="255"
                                placeholder="https://..."
                            >
                            <small class="text-danger d-none" data-error="url"></small>
                        </div>

                        {{-- <div class="form-group">
                            <label for="url_image">URL de imagen</label>
                            <input
                                type="url"
                                name="url_image"
                                id="url_image"
                                class="form-control"
                                value="{{ old('url_image') }}"
                                maxlength="255"
                                placeholder="https://..."
                            >
                            <small class="text-danger d-none" data-error="url_image"></small>
                        </div> --}}
                    </form>
                </div>

                <div class="modal-footer" style="font-family:Montserrat-Bold">
                    <button
                        type="button"
                        class="btn"
                        style="font-family:Montserrat-SemiBold;background-color:#3a260c;color:#ffffff"
                        onclick="New(); document.getElementById('certificationForm').reset(); clearFormErrors();"
                    >
                        Nuevo
                    </button>

                    <button
                        type="button"
                        class="btn btn-success"
                        id="create"
                        onclick="certificationStore()"
                    >
                        Guardar
                    </button>

                    <button
                        type="button"
                        class="btn btn-danger"
                        id="update"
                        onclick="certificationUpdate()"
                        disabled
                    >
                        Modificar
                    </button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

@endsection

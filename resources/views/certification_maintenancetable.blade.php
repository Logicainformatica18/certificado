<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">Certificados</h3>
                        {{-- Espacio para filtros/botón extra si lo necesitas --}}
                    </div>

                    <div class="card-body">
                        <table id="certificationsTable" class="table table-bordered table-striped w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Descripción</th>
                                    <th>Horas</th>

                                    @role('Coordinación|Administrador')
                                        <th>Nota</th>
                                        <th>Detalle</th>
                                        <th>Código</th>
                                        <th>Límite</th>
                                        {{-- <th>URL</th>
                                        <th>Imagen</th> --}}
                                    @endrole

                                    <th style="width:140px;">Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($certification as $item)
                                    <tr>
                                        {{-- Enumeración amigable --}}
                                        <td>{{ $loop->iteration }}</td>

                                        <td class="align-middle">
                                            {{ $item->description }}
                                        </td>

                                        <td class="align-middle">
                                            {{ (int) $item->hours }}
                                        </td>

                                        @role('Coordinación|Administrador')
                                            <td class="align-middle">
                                                {{ $item->note }}
                                            </td>

                                            <td class="align-middle">
                                                {{ $item->detail }}
                                            </td>

                                            <td class="align-middle">
                                                {{ $item->code ?? '—' }}
                                            </td>

                                            <td class="align-middle">
                                                <span class="badge badge-{{ $item->limit > 0 ? 'info' : 'secondary' }}">
                                                    {{ (int) $item->limit }}
                                                </span>
                                            </td>

                                            {{-- <td class="align-middle">
                                                @if($item->url)
                                                    <a href="{{ $item->url }}" target="_blank" rel="noopener">
                                                        Ver
                                                    </a>
                                                @else
                                                    —
                                                @endif
                                            </td>

                                            <td class="align-middle">
                                                @if($item->url_image)
                                                    <img
                                                        src="{{ $item->url_image }}"
                                                        alt="Imagen de {{ $item->description }}"
                                                        style="width:40px;height:40px;object-fit:cover;border-radius:4px;"
                                                        onerror="this.style.display='none'"
                                                    >
                                                @else
                                                    —
                                                @endif
                                            </td> --}}
                                        @endrole

                                        <td class="align-middle">
                                            @role('Coordinación|Administrador')
                                                <button
                                                    type="button"
                                                    class="btn btn-success btn-sm"
                                                    data-toggle="modal"
                                                    data-target="#certificationModal"
                                                    title="Editar"
                                                    onclick="certificationEdit('{{ $item->id }}'); Up(); return false;"
                                                >
                                                    <i class="note-icon-pencil"></i>
                                                </button>

                                                <button
                                                    type="button"
                                                    class="btn btn-danger btn-sm"
                                                    title="Eliminar"
                                                    onclick="certificationDestroy('{{ $item->id }}'); return false;"
                                                >
                                                    <i class="note-icon-trash"></i>
                                                </button>

                                                <button
                                                    type="button"
                                                    class="btn btn-warning btn-sm text-white"
                                                    title="Examen"
                                                    onclick="certificationDetail('{{ $item->id }}')"
                                                >
                                                    Exámen
                                                </button>
                                            @endrole

                                            {{-- @role('Socio-comercial')
                                                <button
                                                    type="button"
                                                    class="btn btn-primary btn-sm"
                                                    style="background-color:#3a260c;border-color:#3a260c"
                                                    title="Rendir Examen"
                                                    onclick="qualificationStore('{{ $item->id }}');"
                                                >
                                                    Rendir Examen
                                                </button>
                                            @endrole --}}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="@role('Coordinación|Administrador') 10 @else 4 @endrole" class="text-center text-muted">
                                            No hay certificados registrados.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- Si usas paginación de Laravel en lugar de DataTables --}}
                    @if(method_exists($certification, 'links'))
                        <div class="card-footer">
                            {{ $certification->onEachSide(1)->links() }}
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</section>

@extends('template')

@section('content')
<div class="container-fluid py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0" style="font-family: Montserrat-Bold;">
                {{ $topics->count() ? $topics->first()->course->description : 'Curso' }}
                <small class="text-light">| Categoría: <strong>{{ $category }}</strong></small>
            </h5>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle text-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Descripción</th>
                            <th>Instructor</th>
                            <th>Tipo</th>
                            <th>Video</th>
                            <th>Detalle</th>
                            <th>Puntos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($topics as $topic)
                            <tr>
                                <td>{{ $topic->id }}</td>
                                <td>
                                    <a
                                        target="_blank"
                                        href="{{ url('cursos/' . $topic->course_id . '/tema/' . $topic->id) }}"
                                        class="text-primary font-weight-bold"
                                        style="text-decoration: none;"
                                    >
                                        <i class="fas fa-link mr-1"></i>{{ $topic->description }}
                                    </a>
                                </td>
                                <td>{{ optional($topic->user)->names }}</td>
                                <td>
                                    <span class="badge badge-secondary">{{ $topic->type }}</span>
                                </td>
                                <td class="text-truncate" style="max-width: 200px;">
                                    {{ $topic->video }}
                                </td>
                                <td>{{ $topic->detail }}</td>
                                <td>
                                    <span class="badge badge-info">{{ $topic->point }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Paginación --}}
            <div class="mt-4 d-flex justify-content-center">
                {{ $topics->links() }}
            </div>
        </div>
    </div>
</div>

{{-- Estilos adicionales si se requiere --}}
@push('styles')
    <style>
        .relative svg {
            width: 44px;
            height: 44px;
        }

        .hidden div p {
            display: none;
        }

        .hidden div {
            margin: 20px;
        }
    </style>
@endpush
@endsection

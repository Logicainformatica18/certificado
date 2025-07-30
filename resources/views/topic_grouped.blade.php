@extends('template')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 align-items-center">
            <div class="col-md-6">
                <h1 class="mb-0" style="font-family: Montserrat-Bold; color: #1b3d6d;">
                    Temario agrupado – {{ $course->description }}
                </h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Temario por categoría</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="card shadow-sm">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover table-striped align-middle mb-0">
                    <thead class="thead-dark">
                        <tr style="background-color: #f4f6f9;">
                            <th style="width: 30%">Enlace</th>
                            <th>Categoría</th>
                            <th>Cantidad de Temas</th>
                            <th>Instructor(es)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($groupedTopics as $categoryName => $topics)
                            <tr>
                                <td>
                                    <a 
                                        href="{{ url('temas-por-categoria/' . $course->id . '/' . urlencode($categoryName)) }}" 
                                        class="text-primary font-weight-bold d-flex align-items-center"
                                        style="font-family: Montserrat; text-decoration: none;"
                                    >
                                        <i class="fas fa-link mr-2"></i> {{ $categoryName }}
                                    </a>
                                </td>
                                <td>{{ $categoryName }}</td>
                                <td><span class="badge badge-info">{{ count($topics) }}</span></td>
                                <td>
                                    @php
                                        $instructors = collect($topics)->map(function($t) {
                                            return optional($t->user)->names;
                                        })->filter()->unique()->values();
                                    @endphp
                                    {{ $instructors->implode(', ') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No hay temas agrupados disponibles.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

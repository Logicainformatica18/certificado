@extends('template')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 style="font-family:Montserrat-Bold;color:#1b3d6d">
                    Temario agrupado - {{ $course->description }}
                </h1>
            </div>
            <div class="col-sm-6">
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
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Categoría</th>
                    <th>Cantidad de Temas</th>
                    <th>Instructor(es)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($groupedTopics as $categoryName => $topics)
                    <tr>
                        <td>{{ $categoryName }}</td>
                        <td>{{ count($topics) }}</td>
                        <td>
                            @php
                                $instructors = collect($topics)->map(function($t) {
                                    return optional($t->user)->names;
                                })->filter()->unique()->values();
                            @endphp
                            {{ $instructors->implode(', ') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection

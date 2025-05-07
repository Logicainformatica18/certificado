<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temas por Categoría</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
</head>
<body>
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-body border-bottom">
            <h5 class="mb-0">
                {{ $topics->count() ? $topics->first()->course->description : 'Curso' }} - Categoría: {{ $category }}
            </h5>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
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
                                <a target="_blank" href="{{ url('cursos/' . $topic->course_id . '/tema/' . $topic->id) }}">
                                    {{ $topic->description }}
                                </a>
                            </td>
                            <td>{{ optional($topic->user)->names }}</td>
                            <td>{{ $topic->type }}</td>
                            <td>{{ $topic->video }}</td>
                            <td>{{ $topic->detail }}</td>
                            <td>{{ $topic->point }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <style>
                .relative svg {
                    width: 44px;
                    /* Ajusta el tamaño del icono */
                    height: 44px;
                }
        
                .hidden div p {
                    display: none;
        
                }
        
                .hidden div {
                    margin: 20px
                }
            </style>
          

           <div class="mt-5 d-flex justify-content-start" style="height:20px;width:100%">
                {{ $topics->links() }}
            </div>
        </div>
    </div>
</div>
</body>
</html>
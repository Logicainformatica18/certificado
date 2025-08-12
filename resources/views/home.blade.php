@extends('template')

@section('content')
<style>
    /* Mantener todas las tarjetas alineadas y con la misma “caja” */
    .role-col { display:flex; }
    .role-card {
        border:0; border-radius:20px; overflow:hidden;
        background: linear-gradient(135deg,#011316 20%,#000000 80%);
        box-shadow: 0 8px 24px rgba(0,0,0,.15);
        display:flex; flex-direction:column;
        width:100%; height:100%;
        transition: transform .2s ease, box-shadow .2s ease;
    }
    .role-card:hover { transform: translateY(-4px); box-shadow:0 14px 34px rgba(0,0,0,.22); }

    /* Contenedor de imagen con altura consistente (BS4 no trae aspect-ratio) */
    .role-media { position:relative; padding-top:56.25%; } /* 16:9 */
    .role-media > img {
        position:absolute; inset:0;
        width:100%; height:100%; object-fit:cover; display:block;
        /* Si quieres que el logo salga en blanco sin editar archivo: */
        /* filter: brightness(0) invert(1); */
    }

    .role-body { padding: 1rem 1.1rem 1.25rem; color:#fff; display:flex; flex-direction:column; }
    .role-title { font-weight:700; margin:0 0 .35rem; letter-spacing:.2px; }
    .role-text  { margin:0; opacity:.95; line-height:1.35; }
</style>

<section class="content-header">
    <p></p>
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 style="font-family:Montserrat-Bold;color:#1b3d6d">Roles</h1>
                {{ session('success') }}
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active" style="color:#1b3d6d">Roles</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>

<div class="container">
    <div class="row align-items-stretch">
        @foreach ($users->roles as $item)
            @php
                $role = $item->name;
                $map = [
                    'Socio-comercial' => [
                        'img' => asset('Socio-Comercial.png'),
                        'text'=> 'Como Socio-comercial podrás acceder a los materiales del curso donde te has inscrito.',
                    ],
                    'Coordinación' => [
                        'img' => asset('COORDINACION.png'),
                        'text'=> 'Como coordinador tendrás todos los permisos en el sistema.',
                    ],
                    'Coach' => [
                        'img' => asset('COORDINACION.png'),
                        'text'=> 'Como Coach podrás gestionar las calificaciones de tus Socio-comercials.',
                    ],
                ];
            @endphp

            @if(isset($map[$role]))
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4 role-col">
                <a href="{{ url($role) }}" class="w-100" style="text-decoration:none">
                    <div class="card role-card">
                        <div class="role-media">
                            <p>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;

                            </p>
                            <img src="{{ $map[$role]['img'] }}" alt="{{ $role }}">
                        </div>
                        <div class="role-body">
                            <h5 class="role-title">{{ $role }}</h5>
                            <p class="role-text">{{ $map[$role]['text'] }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endif
        @endforeach
    </div>
</div>
@endsection

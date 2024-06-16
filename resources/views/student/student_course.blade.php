@extends('template')
@section('content')
<p></p>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <p></p><div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="font-family:Montserrat-Bold;color:#1b3d6d"> <b>Mis Programas / Mis Cursos</b></h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    {{-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active" style="color:#1b3d6d">Exámenes</li>
                    </ol> --}}
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Button trigger modal -->
 
   <form action="" id="course">

   </form>

    <p></p>
    <!-- /.content -->
    {{-- {{ $course->onEachSide(5)->links() }} --}}
    <div id="mycontent">
        @include('student/student_coursetable')
    </div>



@endsection

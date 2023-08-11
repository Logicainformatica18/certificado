@extends('template')
@section('content')
<p></p>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> <b>Cursos en emisión</b></h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    {{-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Exámenes</li>
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
        @include('student/student_inscriptiontable')
    </div>
<form action=""name="inscription"id="inscription">
    @csrf
</form>


@endsection

@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row container-fluid">
            <div class="col col-lg-6 col-md-12">
  
                <img src="{{asset('imageusers/'.$course[0]->presentation)}}" alt="" srcset="" width="100%" style="border-radius: 5px">
            </div>
            <div class="col col-lg-6 col-md-12">
                <div id="mycontent">
                    @include('student.student_certificatetable')
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

<form action=""name="certification"id="certification"></form>
    <p></p>


    <p></p>
@endsection

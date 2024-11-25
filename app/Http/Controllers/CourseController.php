<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Support\Facades\Session;
class CourseController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function __construct()
  {
    $this->middleware('auth');


  }
  public function index()
  {
    $course = Course::orderBy('id', 'DESC')->get();
    $type = Type::all();
    return view("course", compact("course", "type"));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $course = Course::orderBy('id', 'DESC')->get();
    return view("coursetable", compact("course"));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $course = new Course;
    $course->description = $request->description;
    $course->detail = $request->detail;
    $course->type_id = $request->type;
    $course->hours = $request->hours;
    $course->folder_certification = $request->folder_certification;

    //file
    if ($request->file('brochure') != null) {
      $request->brochure = fileStore($request->file('brochure'), "brochure");
      $course->brochure = $request->brochure;
    }
    $course->save();
    return $this->create();
  }

  /**
   * Display the specified resource.
   */
  // public function courseTopic(Request $request)
  // {
  //   $course = Course::orderBy("id","DESC")->get();

  //   return redirect('cursos_temas/1');
  //   //  return view('usuarios', compact('course'));
  // }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Request $request)
  {
    $course = Course::find($request->id);
    return $course;
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request)
  {


    $course = Course::find($request->id);

    if ($request->file('brochure') != "") {
      fileDestroy($course->brochure, "brochure");
      $course->brochure = fileStore($request->file('brochure'), "brochure");
    }

    if ($request->file('presentation') != "") {
      fileDestroy($course->presentation, "imageusers");
      $course->presentation = fileStore($request->file('presentation'), "imageusers");
    }
    if ($request->file('emision') != "") {
      fileDestroy($course->emision, "imageusers");
      $course->emision = fileStore($request->file('emision'), "imageusers");
    }

    $course->description = $request->description;
    $course->detail = $request->detail;
    $course->hours = $request->hours;
    $course->review = $request->review;
    $course->type_id = $request->type;
    $course->save();

    return $this->create();

  //           if ($request->presentation != "" && $request->emision==""){
  //           $course = Course::find($request["id"]);
  //           fileDestroy($course->presentation, "imageusers");
  //           $request->presentation = fileStore($request->file('presentation'), "imageusers");


  //                 $course = Course::find($request->id);
  //       $course->description = $request->description;
  //       $course->detail = $request->detail;
  //         $course->hours = $request->hours;
  //     //     $course->folder_certification = $request->folder_certification;
  //           $course->presentation = $request->presentation;
  //              $course->review = $request->review;
  //              $course->type_id = $request->type;
  //       $course->save();
  //       }

  //    elseif ($request->presentation == "" && $request->emision!="") {

  //          $course = Course::find($request["id"]);
  //      fileDestroy($course->emision, "imageusers");
  //      $request->emision = fileStore($request->file('emision'), "imageusers");


  //            $course = Course::find($request->id);
  //  $course->description = $request->description;
  //  $course->detail = $request->detail;
  //    $course->hours = $request->hours;
  //    // $course->folder_certification = $request->folder_certification;
  //      $course->emision = $request->emision;
  //         $course->review = $request->review;
  //         $course->type_id = $request->type;
  //  $course->save();
  //  }
  //  elseif ($request->presentation == "" && $request->emision==""){
  //   $course = Course::find($request->id);
  //   $course->description = $request->description;
  //   $course->detail = $request->detail;
  //     $course->hours = $request->hours;
  // //     $course->folder_certification = $request->folder_certification;
  //         $course->review = $request->review;
  //         $course->type_id = $request->type;
  //   $course->save();

  //     }




  
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Request $request)
  {



    Course::find($request->id)->delete();
    return $this->create();
  }
  public function course_detail(Request $request)
  {
    Session::put('course_id', $request->id);
    return Session::put('registry_detail_id', $request->registry_detail_id);

  }
}

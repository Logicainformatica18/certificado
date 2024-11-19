<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $course_id = Session::get('course_id');
        $topic = Topic::where("course_id","=",$course_id)->get();
        return view("topic", compact("topic"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function report(Request $request)
    {
        
        $topic = Topic::where('course_id','=',$request->course_id)
        ->where('id','=',$request->topic_id)->get();

         return view("student.curso_topic", compact("topic"));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course_id = Session::get('course_id');

        $topic = new Topic;
        $topic->description = $request->description;
        $topic->course_id = $course_id;
        $topic->detail = $request->detail;
        $topic->post = $request->post;
        $topic->instruction = $request->instruction;
        $topic->point = $request->point;
        $topic->save();
        return "hola";
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $topic= Topic::find($request->id);
        return  $topic;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $course_id = Session::get('course_id');
        $topic= topic::find($request->id);
        $topic->description = $request->description;
        $topic->course_id = $course_id;
        $topic->detail = $request->detail;
        $topic->post = $request->post;
        $topic->instruction = $request->instruction;
        $topic->point = $request->point;

   
  

        // if ($request->file('photo') != null) {
        //    // $table = topic::find($request["id"]);
        //     photoDestroy($topic->photo, "imageusers");
        //     $request->photo = photoStore($request->file('photo'), "imageusers");
        //     $topic->photo = $request->photo;
        // }

       
        $topic->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
      
        Topic::find($request->id)->delete();
        //return $this->create();
    }
}

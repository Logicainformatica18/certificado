<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;
use App\Models\Course;
use App\Models\Category;
use App\Models\CategoryDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class TopicController extends Controller
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
        $course_id = Session::get('course_id');
        $course = Course::where("id", "=", $course_id)->get();
        $topic = Topic::where("course_id", "=", $course_id)->get();
        $category = Category::all();
        return view("topic", compact("topic", "category", "course"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course_id = Session::get('course_id');
        $topic = Topic::where("course_id", "=", $course_id)->get();

        return view("topictable", compact("topic"));
    }
    public function report(Request $request)
    {

        $topic = Topic::where('course_id', '=', $request->course_id)
        ->where('id', '=', $request->topic_id)->get();

        $count = Topic::where('user_id', '=', $topic[0]->user_id)->count();
            return view("vista2", compact("topic","count"));
       // return view("student.curso_topic", compact("topic"));
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
        $topic->user_id = Auth::user()->id;
        $topic->detail = $request->detail;
        $topic->post = $request->post;
        $topic->instruction = $request->instruction;
        $topic->point = $request->point;
        $topic->time = $request->time;
        $topic->video = $request->video;
        $topic->type = $request->type;
        //file
        if ($request->file('photo') != null) {
            $request->photo = fileStore($request->file('photo'), "imageusers");
            $topic->image_1 = $request->photo;
        }
        //file
        if ($request->file('file_1') != null) {
            $request->file_1 = fileStore($request->file('file_1'), "file");
            $topic->file_1 = $request->file_1;
        }
        //file
        if ($request->file('file_2') != null) {
            $request->file_2 = fileStore($request->file('file_2'), "file");
            $topic->file_2 = $request->file_2;
        }
        //resource
        if ($request->file('resource_1') != null) {
            $request->resource_1 = fileStore($request->file('resource_1'), "resource");
            $topic->resource_1 = $request->resource_1;
        }
        $topic->save();


        // Garantiza que $request->category sea siempre un array, incluso si solo se seleccionó un valor
        // $category = (array) $request->category;

        foreach ($request->category as $categorys) {

            $categoryDetail = new CategoryDetail;
            $categoryDetail->category_id = $categorys;
            $categoryDetail->topic_id = $topic->id;
            $categoryDetail->save();
        }

        return $this->create();
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
        $topic = Topic::find($request->id);
        return $topic;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $course_id = Session::get('course_id');
        $topic = topic::find($request->id);
        $topic->description = $request->description;
        $topic->course_id = $course_id;
        $topic->detail = $request->detail;
        $topic->post = $request->post;
        $topic->instruction = $request->instruction;
        $topic->point = $request->point;




        // if ($request->file('photo') != null) {
        //    // $table = topic::find($request["id"]);
        //     fileDestroy($topic->photo, "imageusers");
        //     $request->photo = fileStore($request->file('photo'), "imageusers");
        //     $topic->photo = $request->photo;
        // }


        $topic->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $table = Topic::find($request["id"]);
        fileDestroy($table->image_1, "imageusers");
        fileDestroy($table->resource_1, "resource");
        fileDestroy($table->file_1, "file");
        fileDestroy($table->file_2, "file");
        Topic::find($request->id)->delete();
        //  CategoryDetail::where('type_id', $request->id)->delete();

        return $this->create();
    }
}

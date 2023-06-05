<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
           $certification_id = Session::get('certification_id');
            $exam= Exam::where('certification_id','=',$certification_id)->get();
        return view("exam", compact('exam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
                 $certification_id = Session::get('certification_id');
            $exam= Exam::where('certification_id','=',$certification_id)->get();
        return view("examtable", compact('exam'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $exam = new Exam;
        $exam->description =$request->description;
        $exam->detail = $request->detail;
       $exam->certification_id = Session::get('certification_id');
        $exam->save();
        return $this->create();
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
            $exam = Exam::find($request->id);
       return $exam;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
       $exam = Exam::find($request->id);
             $exam->description =$request->description;
        $exam->detail = $request->detail;
       $exam->certification_id = Session::get('certification_id');
        $exam->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Exam::find($request->id)->delete();
        return $this->create();
    }
        public function exam_detail(Request $request)
    {
       return Session::put('exam_id',$request->id );
  
    }
}

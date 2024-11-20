<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
class QuestionController extends Controller
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
           $exam_id = Session::get('exam_id');
            $question= Question::where('exam_id','=',$exam_id)->get();
        return view("question", compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          $exam_id = Session::get('exam_id');
            $question= Question::where('exam_id','=',$exam_id)->get();
        return view("questiontable", compact('question'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $question = new Question;
             $question->exam_id = Session::get('exam_id');
             $question->ask = $request->ask;
             $question->alternative1 = $request->alternative1;
             $question->alternative2 = $request->alternative2;
             $question->alternative3 = $request->alternative3;
             $question->alternative4 = $request->alternative4;
              $question->answer = $request->answer;
        $question->save();
        return $this->create();
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        
          $question = Question::find($request->id);
        return $question;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
          $question = Question::find($request->id);
            $question->ask = $request->ask;
                 $question->ask = Session::get('exam_id');
             $question->alternative1 = $request->alternative1;
             $question->alternative2 = $request->alternative2;
             $question->alternative3 = $request->alternative3;
             $question->alternative4 = $request->alternative4;
        $question->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}

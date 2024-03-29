<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Qualification;
use App\Models\RegistryDetail;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Imports\ExamsImport;
use Maatwebsite\Excel\Facades\Excel;


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
     
            $request->question_image = photoStore($request->file('question_image'), "imageusers");
                 $request->image1 = photoStore($request->file('image1'), "imageusers");
                   $request->image2 = photoStore($request->file('image2'), "imageusers");
                     $request->image3 = photoStore($request->file('image3'), "imageusers");
                       $request->image4= photoStore($request->file('image4'), "imageusers");
                     
              $exam = new Exam;
             $exam->certification_id = Session::get('certification_id');
             $exam->ask = $request->ask;
            $exam->question_image = $request->question_image;
             $exam->image1 = $request->image1;
              $exam->image2 = $request->image2;
               $exam->image3 = $request->image3;
                $exam->image4 = $request->image4;
             $exam->alternative1 = $request->alternative1;
             $exam->alternative2 = $request->alternative2;
             $exam->alternative3 = $request->alternative3;
             $exam->alternative4 = $request->alternative4;
              $exam->answer = $request->answer;
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
            $exam->certification_id = Session::get('certification_id');
             $exam->ask = $request->ask;
             $exam->alternative1 = $request->alternative1;
             $exam->alternative2 = $request->alternative2;
             $exam->alternative3 = $request->alternative3;
             $exam->alternative4 = $request->alternative4;
              $exam->answer = $request->answer;
        $exam->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
    Qualification::where("exam_id","=",$request->id)->delete();
        Exam::find($request->id)->delete();
        return $this->create();
    }
    //     public function exam_detail(Request $request)
    // {
    //    return Session::put('exam_id',$request->id );
  
    // }
    public function import() 
    {
       
$certification_id= Session::get('certification_id');
//return "edfedfd";
       Excel::import(new ExamsImport($certification_id), request()->file('file'));
            
        return back();
    }



}

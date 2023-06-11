<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Qualification;
use App\Models\RegistryDetail;
use App\Models\Exam;
use App\Http\Requests\StoreQualificationRequest;
use App\Http\Requests\UpdateQualificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class QualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
              $certification_id = Session::get('certification_id');
            $exam= Exam::where('certification_id','=',$certification_id)->get();
        
        return view("student/student_exam", compact('exam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

        public function qualification_certification(Request $request)
    {

             $exam = Exam::where('certification_id','=',Session::get('certification_id'))->count();
            $qualification = Qualification::where('registry_detail_id','=',Session::get('registry_detail_id'))
            ->where('state','=','v')->count();
$certification = Certification::where('id','=',Session::get('certification_id'))->get();
            
            $average= $qualification / $exam;

            if ($average >0.60) {
            $property = $certification[0]->note;
        $registry_detail = RegistryDetail::find(Session::get('registry_detail_id'));
       $registry_detail->$property = 20;       
       $registry_detail->save();
            return 'Aprobado';

            }
            else{
                return 'Desaprobado';
            }

    
                 
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
           Qualification::where('registry_detail_id','=',Session::get('registry_detail_id'))->delete();
   
        
          $exam = Exam::where('certification_id','=',$request->id)->count();
 $exam_id = Exam::select('id')->where('certification_id','=',$request->id)->get();
          for ($i=0; $i < $exam; $i++) { 
            $qualification = new Qualification;
            $qualification->exam_id = $exam_id[$i]->id;
             $qualification->registry_detail_id = Session::get('registry_detail_id');
             $qualification->option = '';
             $qualification->state = 'f';
             $qualification->save();
          }
    
  return Session::put('certification_id',$request->id );
      //  return $this->create();
    }

    /**
     * Display the specified resource.
     */
    public function show(Qualification $qualification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Qualification $qualification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
           $qualification = Qualification::find($request->id);
             $qualification->exam_id = $request->exam_id;
             $qualification->registry_detail_id = Session::get('registry_detail_id');
             $qualification->option = $request->option;
             if ($request->answer==$request->option) {
            $qualification->state = 'v';
             }
             else {
                 $qualification->state = 'f';
             }
           
              
        $qualification->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($exam_id)
    {
          Qualification::find($exam_id)->delete();
      //  return $this->create();
    }
}

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
    public function __construct()
    {
        $this->middleware('auth');


    }

public function index()
{
    $registryDetailId = Session::get('registry_detail_id');
    $registry_details = RegistryDetail::find($registryDetailId);

    if (!$registryDetailId) {
        return redirect()->route('Mis-cursos.index')->with('error', 'Sin registro activo.');
    }

    // Trae preguntas en orden aleatorio en cada carga
    $qualification = Qualification::with('exam')
        ->where('registry_detail_id', $registryDetailId)
        ->inRandomOrder()
        ->get();

    if ($qualification->isEmpty()) {
        return redirect()->route('Mis-cursos.index')->with('error', 'No hay preguntas para este examen.');
    }

    $qualification_count = $qualification->count();

    return view('student/student_exam', compact('qualification', 'qualification_count','registry_details'));
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
    $registryDetailId = Session::get('registry_detail_id');

    $exam = Exam::where('certification_id', Session::get('certification_id'))->count();
    $qualification = Qualification::where('registry_detail_id', $registryDetailId)
        ->where('state', 'v')
        ->count();

    $certification = Certification::findOrFail(Session::get('certification_id'));
    $average = $exam > 0 ? ($qualification / $exam) : 0;

    // Cargamos y actualizamos el limit +1
    $registry_detail = RegistryDetail::findOrFail($registryDetailId);
    $registry_detail->limit = ($registry_detail->limit ?? 0) + 1;

    // Evaluar calificación si es aprobado
    if ($average >= 0.60) {
        $property = $certification->note;

        if ($average >= 0.60 && $average <= 0.65) {
            $registry_detail->$property = 14;
        } elseif ($average >= 0.66 && $average <= 0.70) {
            $registry_detail->$property = 16;
        } elseif ($average >= 0.71 && $average <= 0.75) {
            $registry_detail->$property = 17;
        } elseif ($average >= 0.76 && $average <= 0.80) {
            $registry_detail->$property = 18;
        } elseif ($average >= 0.81 && $average <= 0.90) { // corregí el 90
            $registry_detail->$property = 19;
        } elseif ($average >= 0.90) {
            $registry_detail->$property = 20;
        }
    }

    // Guardamos cambios (nota e incremento de limit)
    $registry_detail->save();

    return $average >= 0.60 ? 'Aprobado' : 'Desaprobado';
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           Qualification::where('registry_detail_id','=',Session::get('registry_detail_id'))->delete();


   $certification = Certification::find($request->id);
    $registry_details = RegistryDetail::find(Session::get('registry_detail_id'));



   if ($registry_details->limit >= $certification->limit  ) {
            return "error";
   }


   if ($certification->note=="n1") {
        //agregamos los limites
    //   $registry_details->limit = $registry_details->limit + 1;
       $registry_details->save();

       //   $qualifications = Qualification::where('registry_detail_id', '=', Session::get('registry_detail_id'))->get();
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

           //     $registry_details->limit = 0;
             $registry_details->save();

   return Session::put('certification_id',$request->id );

   }
   elseif($registry_details->pay =="yes" && $certification->note !="n1")
      {



    //agregamos los limites
    //   $registry_details->limit = $registry_details->limit + 1;
       $registry_details->save();

       //   $qualifications = Qualification::where('registry_detail_id', '=', Session::get('registry_detail_id'))->get();
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


 //  $registry_details->limit = 0;
             $registry_details->save();


   return Session::put('certification_id',$request->id );

   }
    elseif($registry_details->pay =="not" && $certification->note !="n1"){
            return "no matriculado";
    }


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
         //    $qualification->exam_id = $request->exam_id;
          //   $qualification->registry_detail_id = Session::get('registry_detail_id');
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

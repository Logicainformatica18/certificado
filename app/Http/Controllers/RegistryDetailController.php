<?php

namespace App\Http\Controllers;

use App\Imports\RegistryDetailImport;
use App\Models\RegistryDetail;
use App\Http\Requests\StoreRegistryDetailRequest;
use App\Http\Requests\UpdateRegistryDetailRequest;
use Illuminate\Http\Request;
use App\Models\Registry;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use App\Helpers;
use Illuminate\Support\Facades\Session;
use App\Imports\ImportUsers;
use Maatwebsite\Excel\Facades\Excel;
use App\Services\GoogleSheetService;
use Carbon\Carbon;
use App\Models\User;
class RegistryDetailController extends Controller
{
    private $studentId;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//variable creadas en sesion
        $registry_id = Session::get('registry_id');
        $registry = Registry::find($registry_id);
        $registry_detail = RegistryDetail::where("registry_id","=",$registry_id)->get();

        //$student = Student::all();

        $student =DB::select("select  u.email,u.firstname,u.lastname,u.names,m.model_id,m.model_type,m.role_id from users u
        inner join model_has_roles m on u.id = m.model_id where role_id=5");

      
       return view('registry_detail',compact('registry_id','registry_detail','student','registry'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registry_id = Session::get('registry_id');
   $registry = Registry::find($registry_id);
        $registry_detail = RegistryDetail::where("registry_id","=",$registry_id)->get();
        $registry_detail = RegistryDetail::where("registry_id","=",$registry_id)->get();

        return view('registry_detailtable',compact('registry_detail','registry'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
     
        $registry = Registry::find(Session::get('registry_id'));
        $count = RegistryDetail::where('registry_id',Session::get('registry_id'))->count();
        $count = $count + 1;
        $registry_detail = new RegistryDetail;
        $student =explode("-", $request->student) ;

    
  $count_registry_detail= RegistryDetail::where("student_m","=",$student[0])->where("registry_id","=",Session::get('registry_id'))->count();
if ($count_registry_detail>0) {
            return "Error";
}
else{
 
     $registry_detail->student_m = $student[0];
      $registry_detail->student_t = $student[1];
      $registry_detail->student_r = 5;
         $registry_detail->registry_id = $registry->id;
         $registry_detail->limit = "1";
         $registry_detail->pay = "not";
         
$registry_detail->code_certification = $registry->description.'-'.$registry->edition."-".$registry->date_certification.'-'.$count;
      
         $registry_detail->save();
    return $this->create();
}

// else if ($count_registry_detail==0){
   
   
//     $registry_detail->student_m = $student[0];
//       $registry_detail->student_t = $student[1];
//         $registry_detail->student_r = $student[2];
//            if ($count > 9 && $count < 100) {
//                                             $count = '0' . $count;
//                                         } elseif ($count < 10) {
//                                             $count = '00' . $count;
//                                         }
                              
                                        
                                  
        
//                                         $fecha = $registry->fec_end;
//                                         // Crear una instancia de Carbon con la fecha dada
//                                         $carbonDate = Carbon::parse($fecha);
                                
//                                         // Obtener el año, mes y día por separado
//                                         $year = $carbonDate->year;
//                                         $month = $carbonDate->month;
//                                         $day = $carbonDate->day;
//  if ($day <= 9) {
//     $day = "0". $day;
//  }
//  if ($month <= 9) {
//     $month = "0". $month;
//  }
//     $registry_detail->code_certification = $registry->description.'-'.$day.$month.$year.'-'.$count;

//       $registry_id = Session::get('registry_id');

//         $registry_detail->registry_id   =   $registry_id;

//             $registry_detail->pay = "not";

//       $registry_detail->save();


//    return $this->create();
// }


       // return $count_registry_detail;
    }

    /**
     * Display the specified resource.
     */
    public function show(RegistryDetail $registryDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $registry_detail = RegistryDetail::find($request->id);
        return $registry_detail;
    }
    public function registry_detail(Request $request)
    {
       return Session::put('registry_id',$request->id );
        //return redirect()->route('registros_mantenimiento');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $registry_detail = RegistryDetail::find($request->id);

        if (isset($request->n1)) {
            $registry_detail->n1 = $request->n1;
        }
        if (isset($request->n2)) {
            $registry_detail->n2 = $request->n2;
        }
        if (isset($request->n3)) {
            $registry_detail->n3 = $request->n3;
        }
        if (isset($request->n4)) {
            $registry_detail->n4 = $request->n4;
        }
        if (isset($request->n5)) {
            $registry_detail->n5 = $request->n5;
        }
        if (isset($request->n6)) {
            $registry_detail->n6 = $request->n6;
        }
        if (isset($request->n7)) {
            $registry_detail->n7 = $request->n7;
        }
        if (isset($request->n8)) {
            $registry_detail->n8 = $request->n8;
        }
        
$registry_detail->pay = $request->pay;


     $registry_detail->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        RegistryDetail::find($request->id)->delete();
        return $this->create();
    }

        public function certificationGenerate(Request $request)
    {

      // $registry_detail =  RegistryDetail::find($request->id);
            return Session::put('registry_detail_id',$request->id );

      //return view("certification");
    }
    public function import() 
    {
        $registry_id= Session::get('registry_id');

        Excel::import(new RegistryDetailImport($registry_id), request()->file('file'));
      
      //  return $this->studentId;      
      return back();
    }

    public function importGoogle(Request $request){
      
              $google = New GoogleSheetService();
              $data =   $google->getSheetDataWithHeaders($request->id_sheet, $request->range);
       
              $object = json_decode(json_encode($data));
          
    
               foreach ($object as $row) {
              $user =User::where('email', $row->email)
              ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
              ->where('model_has_roles.role_id', 5)
              ->first();
        
   
                   if (!$user) {
                       continue;
                   }
                   else{
                    $count = RegistryDetail::where('registry_id',Session::get('registry_id'))->count();
                    $count = $count + 1;


                    
 $count_registry_detail= RegistryDetail::where("student_m","=",$user->id)->where("registry_id","=",Session::get('registry_id'))->count();
 if ($count_registry_detail>0) {
            continue;
 }
 else if ($count_registry_detail==0){


    if ($count > 9 && $count < 100) {
        $count = '0' . $count;
    } elseif ($count < 10) {
        $count = '00' . $count;
    }

    $registry = Registry::find(Session::get('registry_id'));
    $fecha = $registry->fec_end;
    // Crear una instancia de Carbon con la fecha dada
    $carbonDate = Carbon::parse($fecha);

    // Obtener el año, mes y día por separado
    $year = $carbonDate->year;
    $month = $carbonDate->month;
    $day = $carbonDate->day;
if ($day <= 9) {
$day = "0". $day;
}
if ($month <= 9) {
$month = "0". $month;
}
$code_certification = $registry->description.'-'.$day.$month.$year.'-'.$count;

    $registry_detail = new RegistryDetail([
        'registry_id'       =>  Session::get('registry_id'),
         'n1' => $row->nota1,
         'pay' => $row->matriculado,
         'student_r' => '5',
         'student_m' => $user->id,
         'student_t' => "App\Models\User",
         'code_certification' => $code_certification,
         
    ]);
    $registry_detail->save();
    }
   }                            
  }      
 }
}

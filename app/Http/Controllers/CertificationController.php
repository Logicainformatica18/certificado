<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certification;
use App\Models\Course;
use App\Models\RegistryDetail;
use App\Http\Requests\StoreCertificationRequest;
use App\Http\Requests\UpdateCertificationRequest;
use Illuminate\Support\Facades\Session;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $course_id = Session::get('course_id');
            $certification= Certification::where('course_id','=',$course_id)->orderBy('course_id','DESC')->get();
  $course = Course::orderBy('id','ASC')->get();
        return view("certification_maintenance", compact('certification','course'));


    }

    public function report(Request $request,$registry_detail_id,$language,$code_certification,$cert)
    {
       // return $id." ".$id1;
        //
          //$registry_detail_id = Session::get('registry_detail_id');

         $id =explode("=",$registry_detail_id);
         $language = explode("=",$language);
        $language = $language[1];

          $cert = explode("=",$cert);
        $cert = $cert[1];

        $code_certification = explode("=",$code_certification);
        $code_certification = $code_certification[1];
          //$registry_detail = RegistryDetail::find($id[1]);
//actualizar campo code_certification
  $registry_detail =  RegistryDetail::find($id[1]);
    $registry_detail->code_certification = $code_certification;
$registry_detail->save();




      return view("certification",compact("registry_detail","language","cert"));



    }

    public function savePhoto(Request $request)
    {

//     Decodificar la cadena base64
$imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $request->id));

// Nombre del archivo de salida
$filename = 'storage/certificados/'.$request->code_certification."_".$request->cert.".png";
// Guardar la imagen en un archivo
file_put_contents($filename, $imageData);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
               $course_id = Session::get('course_id');
            $certification= Certification::where('course_id','=',$course_id)->orderBy('course_id','DESC')->get();
  $course = Course::orderBy('id','ASC')->get();
        return view("certification_maintenancetable", compact('certification','course'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $certification = new Certification;
             $certification->description = $request->description;
             $certification->detail = $request->detail;
                  $certification->course_id = $request->course_id;
        $certification->save();
        return $this->create();
    }

    /**
     * Display the specified resource.
     */
    public function show(Certification $certification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
             $certification = Certification::find($request->id);
       return $certification;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
          $certification = Certification::find($request->id);
               $certification->description = $request->description;
             $certification->detail = $request->detail;
                  $certification->course_id = $request->course_id;
        $certification->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
              Certification::find($request->id)->delete();
        return $this->create();
    }
        public function studentCertification()
    {
        //
        return "hola";
    }
    
    public function certification_detail(Request $request)
    {
        
       return Session::put('certification_id',$request->id );
  
    }
}

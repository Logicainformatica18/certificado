<?php

namespace App\Http\Controllers;

use App\Models\RegistryDetail;
use App\Http\Requests\StoreRegistryDetailRequest;
use App\Http\Requests\UpdateRegistryDetailRequest;
use Illuminate\Http\Request;
use App\Models\Registry;
use App\Models\Student;
use App\Helpers;
use Illuminate\Support\Facades\Session;
class RegistryDetailController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//variable creadas en sesion
        $registry_id = Session::get('registry_id');
        $registry = Registry::find($registry_id);
        $registry_detail = RegistryDetail::where("registry_id","=",$registry_id)->get();
        $student = Student::all();


        return view('registry_detail',compact('registry_id','registry_detail','student','registry'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registry_id = Session::get('registry_id');

        $registry_detail = RegistryDetail::where("registry_id","=",$registry_id)->get();

        return view('registry_detailtable',compact('registry_detail'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registry_detail = new RegistryDetail;
        $registry_detail->student_id = $request->student;
      $registry_id = Session::get('registry_id');
        $registry_detail->registry_id   =   $registry_id;


      $registry_detail->save();

    return $this->create();
   //  return    $registry_id ;
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
    public function edit(RegistryDetail $registryDetail)
    {
        //
    }
    public function registry_detail(Request $request)
    {
       return Session::put('registry_id',$request->id );
        //return redirect()->route('registros_mantenimiento');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegistryDetailRequest $request, RegistryDetail $registryDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegistryDetail $registryDetail)
    {
        //
    }
}

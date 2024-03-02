<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\Course;
use App\Models\Registry;
use App\Models\RegistryDetail;
use App\Http\Requests\StoreInscriptionRequest;
use App\Http\Requests\UpdateInscriptionRequest;
use Illuminate\Http\Request;
class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
              $registry = Registry::where('state',"=",'enabled')->get();
        //$type = Type::all();
        return view("student.student_inscription", compact("registry"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registry = Registry::find($request->registry);

        $count = RegistryDetail::where('registry_id', $request->registry)->count();
        $count = $count + 1;
        $registry_detail = new RegistryDetail;
        $student = explode("-", $request->student);

        $count_registry_detail = RegistryDetail::where("student_m", "=", $student[0])->where("registry_id", "=", $request->registry)->count();
        if ($count_registry_detail > 0) {
            return "Error";
        } else if ($count_registry_detail == 0) {
            $registry_detail->student_m = $student[0];
            $registry_detail->student_t ="App\Models\User";
            $registry_detail->student_r = $student[2];
            if ($count > 9 && $count < 100) {
                $count = '0' . $count;
            } elseif ($count < 10) {
                $count = '00' . $count;
            }

            $registry_detail->code_certification = $registry->description . '-' . $count;

            $registry_id = $request->registry;

            $registry_detail->registry_id = $registry_id;


            $registry_detail->save();


        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInscriptionRequest $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscription $inscription)
    {
        //
    }
}

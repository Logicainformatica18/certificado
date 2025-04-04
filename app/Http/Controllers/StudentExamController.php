<?php

namespace App\Http\Controllers;

use App\Models\StudentExam;
use App\Http\Requests\StoreStudentExamRequest;
use App\Http\Requests\UpdateStudentExamRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\RegistryDetail;
class StudentExamController extends Controller
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
              $user=Auth::user();
        //$user->model_has_roles[0]->role_id;
        if ($user->roles_[0]->name=="Socio-comercial") {

          $registry_detail = RegistryDetail::where('student_m','=',$user->model_has_roles[0]->model_id)->get();
            return $registry_detail;
        }
        else{
         //
        }
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
    public function store(StoreStudentExamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentExam $studentExam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentExam $studentExam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentExamRequest $request, StudentExam $studentExam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentExam $studentExam)
    {
        //
    }
}

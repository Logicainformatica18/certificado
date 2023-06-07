<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use App\Models\RegistryDetail;
use App\Models\Question;
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
        //
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
             $qualification = new Qualification;
             $qualification->exam_id = $request->exam_id;
             $qualification->registry_detail_id = Session::get('registry_detail_id');
             $qualification->option = $request->option;
           $qualification->state = '';
              
        $qualification->save();
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
    public function update(UpdateQualificationRequest $request, Qualification $qualification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Qualification $qualification)
    {
        //
    }
}

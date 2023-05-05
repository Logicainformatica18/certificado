<?php

namespace App\Http\Controllers;

use App\Models\Studient;
use App\Http\Requests\StoreStudientRequest;
use App\Http\Requests\UpdateStudientRequest;

class StudientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studient = Studient::orderBy('id','DESC')->get();
      //  $type = Studient::all();
        return view("studient", compact("studient"));
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
    public function store(StoreStudientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Studient $studient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Studient $studient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudientRequest $request, Studient $studient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Studient $studient)
    {
        //
    }
}

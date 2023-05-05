<?php

namespace App\Http\Controllers;

use App\Models\RegistryDetail;
use App\Http\Requests\StoreRegistryDetailRequest;
use App\Http\Requests\UpdateRegistryDetailRequest;
use Illuminate\Http\Request;
use App\Models\Registry;
use App\Helpers;
use Illuminate\Support\Facades\Session;
class RegistryDetailController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//variable creadas en sesion
        $registry_id = Session::get('registry_id');

        return view('registry_detail');

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
    public function store(StoreRegistryDetailRequest $request)
    {
        //
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

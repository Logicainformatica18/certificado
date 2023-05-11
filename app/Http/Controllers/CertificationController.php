<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certification;
use App\Models\RegistryDetail;
use App\Http\Requests\StoreCertificationRequest;
use App\Http\Requests\UpdateCertificationRequest;
use Illuminate\Support\Facades\Session;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
          //$registry_detail_id = Session::get('registry_detail_id');

         $id =explode("=",$request->registry_detail_id);

          $registry_detail = RegistryDetail::find($id[1]);
    

      return view("certification",compact("registry_detail"));



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
    public function store(StoreCertificationRequest $request)
    {
        //
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
    public function edit(Certification $certification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCertificationRequest $request, Certification $certification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certification $certification)
    {
        //
    }
}

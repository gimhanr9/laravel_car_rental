<?php

namespace App\Http\Controllers;

use App\Models\VehicleAdvertisement;
use Illuminate\Http\Request;

class VehicleAdvertisementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisements=VehicleAdvertisement::get();
        return $advertisements;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleAdvertisement  $vehicleAdvertisement
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleAdvertisement $vehicleAdvertisement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleAdvertisement  $vehicleAdvertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleAdvertisement $vehicleAdvertisement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleAdvertisement  $vehicleAdvertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleAdvertisement $vehicleAdvertisement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleAdvertisement  $vehicleAdvertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleAdvertisement $vehicleAdvertisement)
    {
        //
    }
}

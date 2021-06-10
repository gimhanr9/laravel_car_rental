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
        return view('listing',['vehicleAdvertisement'=>$advertisements]);
    }

    public function adminList()
    {
        $advertisements=VehicleAdvertisement::get();
        return view('admin.vehicles',['vehicleAdvertisement'=>$advertisements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('officer.addVehicle');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'model' => 'required',
            'brand' => 'required',
            'description' => 'required|min:10',
            'cost' => 'required',
            'year' => 'required',
            'transmission' => 'required',
            'fuel' => 'required',
            'body' => 'required',
            'engine_capacity' => 'required',
            'rented'=>'nullable'
        ]);

        $vehicle=VehicleAdvertisement::create([
            'title' => $request->title,
            'model' => $request->model,
            'brand' => $request->brand,
            'description' => $request->description,
            'cost' => $request->cost,
            'year' => $request->year,
            'transmission' => $request->transmission,
            'fuel' => $request->fuel,
            'body' => $request->body,
            'engine_capacity' => $request->engine_capacity,
            'rented'=>'No'
            
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleAdvertisement  $vehicleAdvertisement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $vehicleAdvertisement=VehicleAdvertisement::findOrFail($id);
        return view('customer.vehicleDetails', ['vehicle'=> $vehicleAdvertisement]);
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

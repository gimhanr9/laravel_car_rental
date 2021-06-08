<?php

namespace App\Http\Controllers;

use App\Models\Drivers;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers=Drivers::all(['id','name']);
        return view('officer.listDrivers',['drivers'=>$drivers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('officer.addDriver');
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
            'name' => 'required',
            'licenseNo' => 'required',
            'phone' => 'required',
            'dob' => 'required',
    
        ]);

        Drivers::create([
            'name' => $request->name,
            'licenseNo' => $request->licenseNo,
            'phone' => $request->phone,
            'dob' => $request->dob,
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drivers  $drivers
     * @return \Illuminate\Http\Response
     */
    public function show(Drivers $drivers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drivers  $drivers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Drivers::find($id);
        return view('officer.driverEdit',['driver'=>$driver]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drivers  $drivers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'licenseNo' => 'required',
            'phone' => 'required',
            'dob' => 'required',
    
        ]);
        $driver=Driver::find($id);
        $driver->name=$request->input('name');
        $driver->licenseNo=$request->input('licenseNo');
        $driver->phone=$request->input('phone');
        $driver->dob=$request->input('dob');

        $driver->save();
        return redirect('officer.listDrivers')->with('success','Successfully Updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drivers  $drivers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drivers $drivers)
    {
        //
    }
}

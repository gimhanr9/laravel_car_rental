<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\VehicleAdvertisement;

class RentalsController extends Controller
{
    public $vehicleId;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentals=Rental::where('approved','No')->get();
        return view('customer.unconfirmedRentals',['rentals'=>$rentals]);
    }

    public function confirmedRentals()
    {
        $rentals=Rental::where('approved','Yes')->get();
        return view('customer.confirmedRentals',['rentals'=>$rentals]);
    }

    public function allRentals()
    {
        $rentals=Rental::get();
        return view('admin.requests',['rentals'=>$rentals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($vehicle_id)
    {
        $this->vehicleId=vehicle_id;
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
            'start' => 'required',
            'destination' => 'required',
            'dateTaken' => 'required',
            'dueDate' => 'required',
            'distance' => 'required',
    
        ]);

        $user = Auth::user();
        $vehicle=VehicleAdvertisement::where('id',$vehicleId)->get(); 
        Rental::create([
            'customerId'=>$user->id,
            'vehicleId'=>$vehicleId,
            'customerName'=>$user->name,
            'vehicleBrand'=>$vehicle->brand,
            'start' => $request->start,
            'destination' => $request->destination,
            'distance' => $request->distance,
            'price'=>$request->distance * $vehicle->cost,
            'dateTaken' => $request->dateTaken,
            'dueDate' => $request->dueDate,
            'approved' => 'No'
        ]);

        return redirect()->route('customer.unconfirmedRentals');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show(Rental $rental)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rental $rental)
    {
        //
    }
}

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

    public function unconfirmedRentalsAdmin()
    {
        $rentals=Rental::where('approved','No')->get();
        return view('admin.requests',['rentals'=>$rentals]);
    }
    public function confirmedRentalsAdmin()
    {
        $rentals=Rental::where('approved','Yes')->get();
        return view('admin.confirmedRequests',['rentals'=>$rentals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $this->vehicleId=$id;
        return view('customer.requestForm',['vehicle'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'start' => 'required',
            'destination' => 'required',
            'dateTaken' => 'required',
            'dueDate' => 'required',
            'distance' => 'required',
    
        ]);

        $user = Auth::user();
        $vehicle=VehicleAdvertisement::find($id); 
        Rental::create([
            'customerId'=>$user->id,
            'vehicleId'=>$id,
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

        return redirect()->route('customer.requestunconfirmed')->with('status','Successfully added a request.');
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
    public function edit($id)
    {
        $rental=Rental::find($id);
        Rental::where('id',$id)->update(['approved'=>'Yes']);
        VehicleAdvertisement::where('id',$rental->vehicleId)->update(['rented'=>'Yes']);
        return redirect()->route('requests.confirmed');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $rental=Rental::find($id);
        Rental::where('id',$id)->update(['approved'=>'Completed']);
        VehicleAdvertisement::where('id',$rental->vehicleId)->update(['rented'=>'No']);
        return redirect()->route('requests.confirmed');
        
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

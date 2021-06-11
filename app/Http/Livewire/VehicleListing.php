<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\VehicleAdvertisement;

class VehicleListing extends Component
{
   
    public $title,$main_image,$model,$brand,$cost,$year,$transmission,$fuel,$body,$engine_capacity,
    $description,$rented,$searchTerm;




    public function render()
    {
        $searchTerm='%'.$this->searchTerm . '%';
        $advertisements=VehicleAdvertisement::where('rented',"No")->where('title','LIKE',$searchTerm)->get();
        return view('livewire.vehicle-listing',['vehicleAdvertisement'=>$advertisements]);
      
    }
}

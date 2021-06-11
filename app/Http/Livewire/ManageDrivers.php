<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Drivers;
use App\Models\VehicleAdvertisement;

class ManageDrivers extends Component
{
    public $driverId,$name,$licenseNo,$phone,$dob,$carId;
   
    public $updateMode = false;

    private function resetInputFields(){
        $this->name = '';
        $this->licenseNo = '';
        $this->phone = '';
        $this->dob = '';
        $this->carId = '';
    }

    

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'licenseNo' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'carId'=>'nullable'
         
        ]);
  
      Drivers::create($validatedData);
  
        session()->flash('message', 'Driver successfully Uploaded.');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $driver = Drivers::findOrFail($id);
        $this->driverId = $id;
        $this->name = $driver->name;
        $this->licenseNo = $driver->licenseNo;
        $this->phone = $driver->phone;
        $this->dob = $driver->dob;
        $this->dob = $driver->carId;

        $this->updateMode = true;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'licenseNo' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'carId' => 'required | nullable',
         
        ]);
  
        $driver=Drivers::find($this->driverId);
        $driver->update($validatedData);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Driver Updated Successfully.');
        $this->resetInputFields();
    }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Drivers::find($id)->delete();
        session()->flash('message', 'Driver Deleted Successfully.');
    }

    public function render()
    {
        $drivers=Drivers::get();
        $vehicles=VehicleAdvertisement::get();
        return view('livewire.manage-drivers',['driver'=>$drivers,'vehicle'=>$vehicles]);
    }
   
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Drivers;

class ManageDrivers extends Component
{
    public $driverId,$name,$licenseNo,$phone,$dob;
   
    public $updateMode = false;

    private function resetInputFields(){
        $this->name = '';
        $this->licenseNo = '';
        $this->phone = '';
        $this->dob = '';
    }

    

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'licenseNo' => 'required',
            'phone' => 'required',
            'dob' => 'required',
         
        ]);
  
        Drivers::create($validatedData);
  
        session()->flash('message', 'Driver successfully Uploaded.');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $driver = Drivers::findOrFail($id);
        $this->driverId = $id;
        $this->name = $driver->title;
        $this->licenseNo = $driver->licenseNo;
        $this->phone = $driver->phone;
        $this->dob = $driver->dob;

        $this->updateMode = true;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'licenseNo' => 'required',
            'phone' => 'required',
            'dob' => 'required',
         
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
        return view('livewire.manage-drivers',['driver'=>$drivers]);
    
    }
   
}

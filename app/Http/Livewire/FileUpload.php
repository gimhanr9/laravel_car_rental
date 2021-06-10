<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\VehicleAdvertisement;


class FileUpload extends Component
{

    use WithFileUploads;
    public $vehicleId,$title,$main_image,$model,$brand,$cost,$year,$transmission,$fuel,$body,$engine_capacity,
    $description,$rented;
    public $updateMode = false;

    private function resetInputFields(){
        $this->title = '';
        $this->model = '';
        $this->brand = '';
        $this->cost = '';
        $this->year = '';
        $this->transmission = '';
        $this->fuel = '';
        $this->body = '';
        $this->engine_capacity = '';
        $this->description = '';
        $this->main_image = '';

        
    }

    

    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'model' => 'required',
            'brand' => 'required',
            'cost' => 'required',
            'year' => 'required',
            'transmission' => 'required',
            'fuel' => 'required',
            'body' => 'required',
            'engine_capacity' => 'required',
            'description' => 'required',
            'rented' => 'nullable'
         
        ]);
  
        $imageName= $this->main_image->store('carImages', 'public');
        $validatedData['main_image'] = $imageName;
        $validatedData['rented'] = 'No';
  
        VehicleAdvertisement::create($validatedData);
  
        session()->flash('message', 'Vehicle successfully Uploaded.');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $vehicle = VehicleAdvertisement::findOrFail($id);
        $this->vehicleId = $id;
        $this->title = $vehicle->title;
        $this->main_image = $vehicle->main_image;
        $this->model = $vehicle->model;
        $this->brand = $vehicle->brand;
        $this->cost = $vehicle->cost;
        $this->year = $vehicle->year;
        $this->transmission = $vehicle->transmission;
        $this->fuel = $vehicle->fuel;
        $this->body = $vehicle->body;
        $this->engine_capacity = $vehicle->engine_capacity;
        $this->description = $vehicle->description;

        $this->updateMode = true;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'model' => 'required',
            'brand' => 'required',
            'cost' => 'required',
            'year' => 'required',
            'transmission' => 'required',
            'fuel' => 'required',
            'body' => 'required',
            'engine_capacity' => 'required',
            'description' => 'required',
            'rented' => 'nullable'
         
        ]);
  
        $imageName= $this->main_image->store('carImages', 'public');
        $validatedData['main_image'] = $imageName;
        $validatedData['rented'] = 'No';
  
        $vehicle=VehicleAdvertisement::find($this->vehicleId);
        $vehicle->update($validatedData);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Vehicle Updated Successfully.');
        $this->resetInputFields();
    }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function delete($id)
    {
        VehicleAdvertisement::find($id)->delete();
        session()->flash('message', 'Vehicle Deleted Successfully.');
    }

    public function render()
    {
        $advertisements=VehicleAdvertisement::get();
        return view('livewire.file-upload',['vehicleAdvertisement'=>$advertisements]);
    
    }
}

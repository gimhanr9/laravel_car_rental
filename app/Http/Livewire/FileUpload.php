<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\VehicleAdvertisement;


class FileUpload extends Component
{

    use WithFileUploads;
    public $title,$main_image,$model,$brand,$cost,$year,$transmission,$fuel,$body,$engine_capacity,
    $description,$rented;

    

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
  
        session()->flash('message', 'Image successfully Uploaded.');
    }

    public function render()
    {
        return view('livewire.file-upload');
    }
}

<?php

namespace App\Models;
use App\Models\VehicleAdvertisement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    protected $table='drivers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'licenseNo',
        'phone',
        'dob',
        'carId'
    ];

    public $timestamps=true;

    public function car(){
        return $this->belongsTo(VehicleAdvertisement::class,'carId');

    }





    
}

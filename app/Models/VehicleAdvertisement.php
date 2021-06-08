<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleAdvertisement extends Model
{
    protected $table='vehicle_advertisements';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'model',
        'brand',
        'description',
        'cost',
        'year',
        'transmission',
        'fuel',
        'body',
        'engine_capacity',
        'main_image',
        'rented',
    ];

    public function driver(){
        return $this->belongsTo('App\Models\Drivers','driverId');

    }
}

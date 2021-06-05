<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $table='rentals';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customerId',
        'vehicleId',
        'customerName',
        'vehicleBrand',
        'driverId',
        'distance',
        'price',
        'dateTaken',
        'dueDate',
        'returned'
    ];
    public function user(){
        return $this->belongsTo('App\Models\Drivers','customerId');

    }
    public function vehicle_advertisement(){
        return $this->belongsTo('App\Models\Drivers','vehicleId');

    }

    public function driver(){
        return $this->belongsTo('App\Models\Drivers','driverId');

    }
}

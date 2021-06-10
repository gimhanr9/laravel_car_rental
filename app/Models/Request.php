<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table='requests';

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
        'start',
        'destination',
        'distance',
        'price',
        'dateTaken',
        'dueDate',
        'approved'
    ];
    public function user(){
        return $this->belongsTo('App\Models\Drivers','customerId');

    }
    public function vehicle_advertisement(){
        return $this->belongsTo('App\Models\Drivers','vehicleId');

    }

}

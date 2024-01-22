<?php

namespace App\Models;

use App\Models\airline;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class flight extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'airline_id',
        'flight_number',
        'departure_time',
        'arrival_airport',
        'departure_airport',
        'arrival_time',
        'status'


    ];

//public function pessanger()
//{
  //  return $this->hasMany(pessanger::class);
//}

public function airline()
{
    return $this->belongsTo(Airline::class);
}
}
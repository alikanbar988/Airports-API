<?php

namespace App\Models;


use App\Models\airline;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pessanger extends Model
{
    use HasFactory;
    protected $fillable = [
        'airline_id',
        'firstname',
        'lastname',
        'email',
       'phone_number',
        'date_of_birth'
        ];
    
   // public function flight()
  // { 
     // return $this->belongsTo(Flight::class);
    //}


public function airline()
{
   return $this->belongsTo(Airline::class);
}
}











//public function airline()
//{
  //  return $this->hasManyThrough(Airline::class, Flight::class);
//}


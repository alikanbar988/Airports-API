<?php

namespace App\Models;

use App\Models\flight;
use App\Models\pessanger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class airline  extends Model
{
    use HasFactory;
    protected $fillable=[
     'name',
     'code',
     'country',
     'founded_year'
    ];
    
    public function flights()
     {
        return $this->hasMany(flight::class);
     }
    // public function pessangers()
    // {
      //  return $this->hasMany(pessanger::class);
    // }
     
   }
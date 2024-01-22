<?php

namespace App\Console\Commands;

use App\Models\airline;
use Illuminate\Console\Command;

class flights extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'flights:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create flights';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $mea = airline::whereCode("ME")->get()->first();
      
       $flight= $mea->flights()->create([
         "flight_number"=>"222",
           "departure_time"=>"2023-01-11 14:22:03",
            "arrival_time"=>"2023-01-15 13:12:01",
            "arrival_airport"=>"beruit",
            "departure_airport"=>"paris",
            "status"=>"arrr"

        ]);
        
       // $farnce_airline = airline::whereCode("FP")->get()->first();
      
        //$flight= $farnce_airline ->flights()->create([
          //"flight_number"=>"555",
            //"departure_time"=>"2024-02-11 14:22:03",
             //"arrival_time"=>"2024-03-20 13:12:01",
             //"arrival_airport"=>"PARIS",
             //"departure_airport"=>"PARIS",
             //"status"=>"YES"
 
         //]);
         
    }
}


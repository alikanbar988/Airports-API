<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Airline;


class CreateAirLine extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'airline:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create airLine';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $mea_airline=airline::create([
            "name"=>"Middle East",
            "code"=>"ME",
            "country"=>"lebanese",
            "founded_year"=>1999

        ]);
        $farnce_airline=airline::create([
            "name"=>"farnce",
            "code"=>"FP",
            "country"=>"FARNCE",
            "founded_year"=>1888

        ]);
        $QATAR_airline=airline::create([
            "name"=>"QATARAIRLINE",
            "code"=>"QR",
            "country"=>"QATAR",
            "founded_year"=>2000

        ]);
    }
}

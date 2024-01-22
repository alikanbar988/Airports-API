<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pessangers', function (Blueprint $table) {
            $table->id();
          //  $table->unsignedBigInteger('airline_id')->Increment();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->date('date_of_birth')->nullable();
           // $table->unsignedBigInteger('flights_id');
           // $table->integer('flight_id')->unsigned()->nullable();
            //$table->foreign('flights_id')->references('id')->on('flights')->onDelete('cascade');
           // $table->integer('airline_id')->unsigned()->nullable();
           // $table->foreign('airline_id')->references('id')->on('airlines')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessangers');
    }
};

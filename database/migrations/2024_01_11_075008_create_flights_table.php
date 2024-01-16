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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('airline_id')->default(4);
            $table->string('flight_number');
            $table->dateTime('departure_time');
            $table->string('arrival_airport');
            $table->dateTime('arrival_time');
            $table->string('departure_airport')->nullable();
            $table->string('status');
            $table->foreign('airline_id')->references('id')->on('airlines')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};

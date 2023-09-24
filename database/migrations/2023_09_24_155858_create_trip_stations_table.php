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
        Schema::create('trip_stations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('trip_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('from_city_id');
            $table->unsignedBigInteger('to_city_id');
            $table->foreign('from_city_id')
              ->references('id')->on('cities')->onDelete('cascade');
              $table->foreign('to_city_id')
              ->references('id')->on('cities')->onDelete('cascade');
            $table->integer('trip_order');
            $table->double('price');
            $table->integer('available_seats')->default(12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip_stations');
    }
};

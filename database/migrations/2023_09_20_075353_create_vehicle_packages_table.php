<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_packages', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_id');
            $table->integer('package_id');
            $table->integer('driver_name');
            $table->integer('driver_phone');
            $table->integer('vehicle_batch');
            $table->integer('completed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_packages');
    }
};

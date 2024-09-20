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
        Schema::create('package_waybills', function (Blueprint $table) {
            $table->id();
            $table->integer('package_id');
            $table->integer('waybill_id');
            $table->integer('completed');
            $table->integer('active');
            $table->integer('checked');
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
        Schema::dropIfExists('package_waybills');
    }
};

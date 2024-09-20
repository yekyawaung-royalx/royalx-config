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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_no');
            $table->integer('user_id');
            $table->integer('from_branch_id');
            $table->integer('from_city_id');
            $table->integer('to_branch_id');
            $table->integer('to_city_id');
            $table->integer('action_id');
            $table->integer('completed');
            $table->integer('package_type_id');
            $table->text('remark');
            $table->string('completed_at');
            $table->timestamps();

            $table->unique(['package_no']);
            $table->index(['package_no','created_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
};

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
        Schema::create('waybills', function (Blueprint $table) {
            $table->id();
            $table->string('waybill_no');
            $table->string('sender_name');
            $table->string('sender_phone');
            $table->string('sender_nrc');
            $table->string('sender_address');
            $table->string('receiver_name');
            $table->string('receiver_phone');
            $table->string('receiver_nrc');
            $table->string('receiver_address');
            $table->string('receipt_name');
            $table->string('receipt_phone');
            $table->string('receipt_nrc');
            $table->integer('product_category_id');
            $table->integer('from_city_id');
            $table->integer('to_city_id');
            $table->integer('user_id');
            $table->integer('branch_id');
            $table->integer('declared_value');
            $table->integer('extra_care_charge');
            $table->integer('service_charge');
            $table->integer('cod_amount');
            $table->integer('cod_fee');
            $table->integer('weight');
            $table->integer('action_id');
            $table->integer('active');
            $table->string('branch_out_date');
            $table->string('branch_in_date');
            $table->timestamps();

            $table->unique(['waybill_no']);
            $table->index(['waybill_no','branch_out_date','branch_in_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('waybills');
    }
};

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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->date('date_voucher');
            $table->date('start_date');
            $table->date('end_date');
            $table->longtext('observations',500);

            $table->unsignedBigInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotels');

            $table->unsignedBigInteger('operator_id');
            /* $table->foreign('operator_id')->references('id')->on('operators'); */

            $table->unsignedBigInteger('service_id');
            /* $table->foreign('service_id')->references('id')->on('services')->nullOnDelete(); */



            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('vouchers');
    }
};

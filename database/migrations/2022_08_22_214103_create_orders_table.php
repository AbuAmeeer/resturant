<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->dateTime('order_date');
            $table->integer('total_amount');
            $table->tinyInteger('status');
            $table->string('processed_by');
            $table->foreignId('qr_id');
            $table->tinyInteger('take_away');
            $table->foreignId('table_id');
            $table->foreignId('branch_id');
            $table->integer('tax');
            $table->string('phone');
            $table->string('pay_code');
            $table->string('payment_method');
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
        Schema::dropIfExists('orders');
    }
}

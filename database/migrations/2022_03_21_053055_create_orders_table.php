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
            $table->unsignedBigInteger('user_id');
            $table->integer('order_number')->unique();
            $table->float('sub_total')->default(0);
            $table->float('total')->default(0);
            $table->float('coupon')->default(0)->nullable();
            $table->float('delivary_charge')->default(0)->nullable();
            $table->string('payment_method')->default('cod');
            $table->boolean('payment_status')->default(0);
            $table->integer('quantity');


            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('state');
            $table->string('postcode');
            $table->text('address');

            $table->string('sfull_name');
            $table->string('sphone');
            $table->string('scity');
            $table->string('sstate');
            $table->string('spostcode');
            $table->text('saddress');

            $table->text('note');
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

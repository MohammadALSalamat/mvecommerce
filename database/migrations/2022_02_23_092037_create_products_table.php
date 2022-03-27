<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('child_category_id')->nullable();
            $table->unsignedBigInteger('vendor_id')->nullable();
            $table->string('title');
            $table->string('size');
            $table->string('slug')->unique();
            $table->text('Summary');
            $table->text('description')->nullable();
            $table->text('additional_info')->nullable();
            $table->text('return_policy')->nullable();
            $table->integer('stock')->default(0);
            $table->text('image');
            $table->text('size_guid')->nullable();
            $table->float('price')->default(0);
            $table->float('offer_price')->default(0);
            $table->float('discound')->default(0);
            $table->string('conditions');
            $table->boolean('status')->default(0);


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
        Schema::dropIfExists('products');
    }
}

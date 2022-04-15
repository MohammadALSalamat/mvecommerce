<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('parent_id')->nullable();
            $table->string('title');
            $table->string('ar_title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('ar_description')->nullable();
            $table->text('image')->nullable();
            $table->boolean('is_parent')->default(true);
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
        Schema::dropIfExists('categories');
    }
}

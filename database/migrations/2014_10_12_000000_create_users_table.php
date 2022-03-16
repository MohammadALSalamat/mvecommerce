<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('saddress')->nullable();
            $table->string('country')->nullable();
            $table->string('scountry')->nullable();
            $table->string('city')->nullable();
            $table->string('scity')->nullable();
            $table->bigInteger('postcode')->nullable();
            $table->bigInteger('spostcode')->nullable();
            $table->string('stat')->nullable();
            $table->string('sstat')->nullable();
            $table->string('photo')->nullable();
            $table->enum('role',['admin','vendor','customer'])->default('customer');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

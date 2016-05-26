<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('status')->default('');
            $table->string('BOD')->default('');
            $table->string('address')->default('');
            $table->string('job')->default('');
            $table->string('mobile')->default('');
            $table->string('fb')->default('');
            $table->string('twiter')->default('');
            $table->string('instagram')->default('');
            $table->string('google')->default('');
            $table->string('youtube')->default('');
            $table->string('profile_pic')->default('');
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
        Schema::drop('users');
    }
}

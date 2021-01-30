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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('dob');
            $table->string('phone');
            $table->string('password');
            $table->string('gender');
            $table->string('user_image')->nullable();
            $table->string('user_cover_image')->nullable();
            $table->string('secrete_id');
            $table->string('about')->nullable();
            $table->enum("status", ['0',"1"])->default("0");
            $table->string('religion')->nullable();
            $table->string('occupation')->nullable();
            $table->string('education')->nullable();
            $table->string('place')->nullable();
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

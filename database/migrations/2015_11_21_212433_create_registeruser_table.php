<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisteruserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registeruser', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_fn', 255);
            $table->string('user_ln', 255);
            $table->string('user_city', 255);
            $table->string('user_state', 255);
            $table->string('user_email', 255);
            $table->string('user_password', 255);
            $table->string('user_created', 255);
            $table->string('user_updated', 255);
            $table->string('user_gender', 255);
            $table->integer('user_mobile',false,false);
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
        Schema::drop('registeruser');
    }
}

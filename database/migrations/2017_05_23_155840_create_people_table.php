<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('email');
            $table->string('tsi');
            $table->date('birth_date');
            $table->string('name');
            $table->string('dni');
            $table->string('location');
            $table->string('sex');
            $table->integer('telephone');
            $table->integer('mobile_phone');
            $table->integer('first_surname');
            $table->integer('second_surname');
            $table->integer('personal_email');
            $table->integer('postal_code');

            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('people');
    }
}

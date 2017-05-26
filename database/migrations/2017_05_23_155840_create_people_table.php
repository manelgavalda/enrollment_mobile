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
            $table->integer('telephone')->nullable();
            $table->integer('mobile_phone')->nullable();
            $table->integer('first_surname')->nullable();
            $table->integer('second_surname')->nullable();
            $table->integer('personal_email')->nullable();
            $table->integer('postal_code')->nullable();

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

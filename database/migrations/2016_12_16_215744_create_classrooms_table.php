<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->integer('enrollment_id')->unsigned()->nullable();
        });

//        Schema::create('classroom_enrollment', function (Blueprint $table) {
//            $table->integer('classroom_id')->unsigned();
//            $table->integer('enrollment_id')->unsigned();
//            $table->timestamps();
//            $table->unique(['classroom_id', 'enrollment_id']);
//        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('classrooms');

    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->increments('id'); //obligatori
            $table->string('name'); //CAMP NO FORMA PART, només vull provar.
            $table->boolean('validated')->nullable(); //només les vàlides són actives.
            $table->boolean('finished')->nullable(); //indica si la matricula està finalitzada.
            //$table->integer('period_id'); //De moment descartat //obligatori
            $table->integer('user_id')->unsigned()->nullable(); //indica si la matricula està finalitzada.
            $table->integer('classroom_id')->unsigned()->nullable(); //indica si la matricula està finalitzada.
            $table->integer('study_id')->unsigned()->nullable();
            $table->integer('course_id')->unsigned()->nullable();
            $table->timestamps(); //timestamps



//            $table->foreign('classroom_id')->references('id')->on('classrooms'); //indica si la matricula està finalitzada.
//            $table->foreign('study_id')->references('id')->on('studies');
//            $table->foreign('course_id')->references('id')->on('courses');
        });

//        Schema::create('enrollment_user', function (Blueprint $table) {
//            $table->integer('enrollment_id')->unsigned();
//            $table->integer('user_id')->unsigned();
//            $table->timestamps();
//            $table->unique(['enrollment_id', 'user_id']);
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}

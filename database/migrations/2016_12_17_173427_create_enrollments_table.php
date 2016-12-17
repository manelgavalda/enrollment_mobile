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
            $table->integer('study_id')->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('classroom_id')->nullable();
            //$table->timestamps(); //timestamps
            //$table->dropTimestamps();
            //$table->userstamps();
        });
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
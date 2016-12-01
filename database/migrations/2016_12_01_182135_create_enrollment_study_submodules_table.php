<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentStudySubmodulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment_study_submodules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('enrollment_id'); // 1 a n enrollment
            $table->integer('study_submodule_id'); //1 a n study_submodules
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollment_study_submodules');
    }
}

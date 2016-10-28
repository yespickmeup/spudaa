<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEmploymentSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_employment_surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->integer('work_status');
            $table->string('work_status_others');
            $table->integer('sat_challenge');
            $table->integer('sat_job_security');
            $table->integer('sat_salary');
            $table->integer('sat_potential');
            $table->integer('sat_support');
            $table->integer('sat_quality_of_service');
            $table->integer('sat_org_ethics');
            $table->integer('job_course_relation');
            $table->string('seek_relavant_job');
            $table->integer('unemployment_reason');
            $table->integer('seeking_employment');
            $table->integer('status');
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
        Schema::drop('user_employment_surveys');
    }
}

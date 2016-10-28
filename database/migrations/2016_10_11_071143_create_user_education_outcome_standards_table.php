<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEducationOutcomeStandardsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('user_education_outcome_standards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->integer('nursing_care_importance');
            $table->integer('nursing_care_impact');
            $table->integer('management_of_environment_importance');
            $table->integer('management_of_environment_impact');
            $table->integer('health_education_importance');
            $table->integer('health_education_impact');
            $table->integer('profession_importance');
            $table->integer('profession_impact');
            $table->integer('legal_responsibilities_importance');
            $table->integer('legal_responsibilities_impact');
            $table->integer('ethico_importance');
            $table->integer('ethico_impact');
            $table->integer('improvement_importance');
            $table->integer('improvement_impact');
            $table->integer('records_management_importance');
            $table->integer('records_management_impact');
            $table->integer('research_importance');
            $table->integer('research_impact');
            $table->integer('collaboration_importance');
            $table->integer('collaboration_impact');
            $table->integer('communication_importance');
            $table->integer('communication_impact');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('user_education_outcome_standards');
    }

}

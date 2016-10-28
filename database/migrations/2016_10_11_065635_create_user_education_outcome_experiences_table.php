<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEducationOutcomeExperiencesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('user_education_outcome_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->integer('creativity_importance');
            $table->integer('creativity_impact');
            $table->integer('commitment_importance');
            $table->integer('commitment_impact');
            $table->integer('ethics_importance');
            $table->integer('ethics_impact');
            $table->integer('teamwork_importance');
            $table->integer('teamwork_impact');
            $table->integer('diversity_importance');
            $table->integer('diversity_impact');
            $table->integer('effective_communication_importance');
            $table->integer('effective_communication_impact');
            $table->integer('punctuality_importance');
            $table->integer('punctuality_impact');
            $table->integer('adaptably_importance');
            $table->integer('adaptably_impact');
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
        Schema::drop('user_education_outcome_experiences');
    }

}

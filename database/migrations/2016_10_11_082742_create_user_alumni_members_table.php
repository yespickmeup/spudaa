<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAlumniMembersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('user_alumni_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('name');
            $table->string('relation');
            $table->string('name_before_married');
            $table->string('email');
            $table->string('contact_number');
            $table->string('address');
            $table->string('occupation');
            $table->string('office_address');
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
        Schema::drop('user_alumni_members');
    }

}

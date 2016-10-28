<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferencesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('preferences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_name');
            $table->string('school_label');
            $table->string('contact_no');
            $table->string('email_address');
            $table->string('address');
            $table->text('about_us');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('preferences');
    }

}

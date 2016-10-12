<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSatisfactionSurveysTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('user_satisfaction_surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->integer('a1');
            $table->integer('a2');
            $table->integer('a3');
            $table->integer('a4');
            $table->integer('a5');
            $table->integer('a6');
            $table->integer('a7');
            $table->integer('a8');
            $table->integer('b1_1');
            $table->integer('b1_2');
            $table->integer('b1_3');
            $table->integer('b1_4');
            $table->integer('b1_5');
            $table->integer('b1_6');
            $table->integer('b2_1');
            $table->integer('b2_2');
            $table->integer('b2_3');
            $table->integer('b2_4');
            $table->integer('b2_5');
            $table->integer('b2_6');
            $table->integer('b3_1');
            $table->integer('b3_2');
            $table->integer('b3_3');
            $table->integer('b3_4');
            $table->integer('b3_5');
            $table->integer('b3_6');
            $table->integer('b4_1');
            $table->integer('b4_2');
            $table->integer('b5_1');
            $table->integer('b5_2');
            $table->integer('b6_1');
            $table->integer('b6_2');
            $table->integer('c1');
            $table->integer('c2');
            $table->integer('c3');
            $table->integer('c4');
            $table->integer('c5');
            $table->integer('c6');
            $table->integer('c7');
            $table->integer('c8');
            $table->integer('c9');
            $table->integer('c10');
            $table->integer('c11');
            $table->integer('d1');
            $table->integer('d2');
            $table->integer('d3');
            $table->integer('d4');
            $table->integer('d5');
            $table->integer('e1_1');
            $table->integer('e1_2');
            $table->integer('e1_3');
            $table->integer('e1_4');
            $table->integer('e1_5');
            $table->integer('e1_6');
            $table->integer('e1_7');
            $table->integer('e1_8');
            $table->integer('e1_9');
            $table->integer('e1_10');
            $table->integer('e1_11');
            $table->integer('e1_12');
            $table->integer('e2_1');
            $table->integer('e2_2');
            $table->integer('e2_3');
            $table->integer('e2_4');
            $table->integer('e2_5');
            $table->integer('e2_6');
            $table->integer('e2_7');
            $table->integer('e2_8');
            $table->integer('e2_9');
            $table->integer('e2_10');
            $table->integer('e2_11');
            $table->integer('e2_12');
            $table->integer('e2_13');
            $table->integer('e3_1');
            $table->integer('e3_2');
            $table->integer('e3_3');
            $table->integer('e4_1');
            $table->integer('e4_2');
            $table->integer('e4_3');
            $table->integer('e4_4');
            $table->integer('e4_5');
            $table->integer('e5_1');
            $table->integer('e5_2');
            $table->integer('e6_1');
            $table->integer('e6_2');
            $table->integer('e6_3');
            $table->integer('e6_4');
            $table->integer('e6_5');
            $table->integer('e6_6');
            $table->integer('e7_1');
            $table->integer('e7_2');
            $table->integer('e7_3');
            $table->integer('f1');
            $table->integer('f2');
            $table->integer('f3');
            $table->integer('f4');
            $table->integer('g1');
            $table->integer('g2');
            $table->integer('g3');
            $table->integer('g4');
            $table->integer('h1');
            $table->integer('h2');
            $table->integer('h3');
            $table->integer('h4');
            $table->text('suggestion');
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
        Schema::drop('user_satisfaction_surveys');
    }

}

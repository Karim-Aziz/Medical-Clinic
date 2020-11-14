<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutAsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_as', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hold_1');
            $table->string('hold_2');
            $table->string('hold_3');
            $table->string('hold_4');
            $table->string('hold_5');
            $table->string('hold_6');
            $table->string('hold_1_ar');
            $table->string('hold_2_ar');
            $table->string('hold_3_ar');
            $table->string('hold_4_ar');
            $table->string('hold_5_ar');
            $table->string('hold_6_ar');
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
        Schema::dropIfExists('about_as');
    }
}

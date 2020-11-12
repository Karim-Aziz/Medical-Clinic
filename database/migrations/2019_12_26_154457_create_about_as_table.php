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
            $table->text('about_company');
            $table->text('about_company_ar');
            $table->text('mission');
            $table->text('mission_ar');
            $table->text('vission');
            $table->text('vission_ar');
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

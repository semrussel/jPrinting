<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_prod', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('main_id');
            $table->string('name');
            $table->string('description');
            $table->integer('is_size');
            $table->integer('is_paperType');
            $table->integer('is_corner');
            $table->integer('is_lam');
            $table->integer('is_substrate');
            $table->integer('is_per');
            $table->integer('is_color');
            $table->integer('is_colorFly');
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
        Schema::drop('sub_prod');
    }
}

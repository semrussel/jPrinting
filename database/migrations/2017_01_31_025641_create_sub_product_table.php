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
            $table->integer('is_paperType')->nullable();
            $table->integer('is_corner')->nullable();
            $table->integer('is_lam')->nullable();
            $table->integer('is_substrate')->nullable();
            $table->integer('is_per')->nullable();
            $table->integer('is_color')->nullable();
            $table->integer('is_colorFly')->nullable();
            $table->integer('is_design')->default(0);
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

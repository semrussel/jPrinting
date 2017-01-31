<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_prod', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('is_subcat');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('logo')->nullable();
            $table->integer('is_size')->nullable();
            $table->integer('is_paperType')->nullable();
            $table->integer('is_corner')->nullable();
            $table->integer('is_lam')->nullable();
            $table->integer('is_substrate')->nullable();
            $table->integer('is_per')->nullable();
            $table->integer('is_color')->nullable();
            $table->integer('is_colorFly')->nullable();
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
        Schema::drop('main_prod');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotSelectprodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_selectprod', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('select_id')->references('id')->on('select')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('service_id');
            $table->integer('is_main');
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
        Schema::drop('pivot_selectprod');
    }
}

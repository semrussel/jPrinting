<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('email');
            $table->string('title');
            $table->string('type');
            $table->string('product');
            $table->string('size');
            $table->string('quantity');
            $table->string('paper_stock')->nullable();
            $table->string('side_pages')->nullable();
            $table->string('lamination')->nullable();
            $table->string('details')->nullable();
            $table->string('attachment')->nullable();
            $table->integer('price');
            $table->string('status');
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
        Schema::drop('request');
    }
}

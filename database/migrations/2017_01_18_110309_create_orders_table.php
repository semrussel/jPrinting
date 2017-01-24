<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_by');
            $table->string('product');
            $table->string('design')->nullable();
            $table->string('file')->nullable();
            $table->string('designType');
            $table->string('size');
            $table->integer('price');
            $table->string('bank');
            $table->string('transaction_number');
            $table->string('quantity');
            $table->string('address');
            $table->string('paperType')->nullable();
            $table->string('side_pages')->nullable();
            $table->string('lamination')->nullable();
            $table->string('description')->nullable();
            $table->string('color')->nullable();
            $table->string('perforation')->nullable();
            $table->string('corner')->nullable();
            $table->string('substrate')->nullable();
            $table->string('colorPly')->nullable();
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
        Schema::drop('orders');
    }
}

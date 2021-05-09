<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('color_id')->unsigned();
            $table->integer('amount');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address');
            $table->string('image')->nullable(); //custom print photo
            $table->string('delivery_date')->nullable();
            $table->string('preparation_date')->nullable();
            $table->foreign('product_id')->references('id')->on('skateboards')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
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
        Schema::dropIfExists('order');
    }
}

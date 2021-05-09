<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSbsAndColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sbs_and_colors', function (Blueprint $table) {
            $table->bigInteger('sb_id')->unsigned();
            $table->bigInteger('color_id')->unsigned();
            $table->foreign('sb_id')->references('id')->on('skateboards')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sbs_and_colors');
    }
}

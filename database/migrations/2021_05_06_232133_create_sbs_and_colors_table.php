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
            $table->foreignId('sb_id')->references('id')->on('skateboards')->constrained();
            $table->foreignId('color_id')->references('id')->on('colors')->constrained();
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

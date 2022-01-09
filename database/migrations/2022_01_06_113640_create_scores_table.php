<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->tinyInteger('aquarius_score');
            $table->tinyInteger('pisces_score');
            $table->tinyInteger('aries_score');
            $table->tinyInteger('taurus_score');
            $table->tinyInteger('gemini_score');
            $table->tinyInteger('cancer_score');
            $table->tinyInteger('leo_score');
            $table->tinyInteger('virgo_score');
            $table->tinyInteger('libra_score');
            $table->tinyInteger('scorpio_score');
            $table->tinyInteger('sagittarius_score');
            $table->tinyInteger('capricorn_score');
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
        Schema::dropIfExists('scores');
    }
}

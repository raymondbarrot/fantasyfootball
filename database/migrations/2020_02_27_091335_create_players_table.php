<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            //minimun req columns
            $table->bigInteger('id');
            $table->string('first_name');
            $table->string('second_name');
            $table->float('form');
            $table->integer('total_points');
            $table->float('influence');
            $table->float('creativity');
            $table->float('threat');
            $table->float('ict_index');

            //other columns
            $table->integer('minutes');
            $table->integer('goals_scored');
            $table->integer('assists');
            $table->integer('goals_conceded');
            $table->integer('own_goals');
            $table->integer('penalties_saved');
            $table->integer('penalties_missed');
            $table->integer('yellow_cards');
            $table->integer('red_cards');
            $table->string('web_name');

            //default columns
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
        Schema::dropIfExists('players');
    }
}

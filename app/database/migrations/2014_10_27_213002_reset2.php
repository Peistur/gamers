<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reset2 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::dropIfExists('game');

        Schema::create('game', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->string('image');
        });

        DB::table('game')->insert( array
            (
                array(
                    'name' => 'Hearthstone',
                    'image' => 'hearthstone_small.png',
                    'alias' => 'hs'
                ),
                array(
                    'name' => 'Heroes of the Storm',
                    'image' => 'hots_small.png',
                    'alias' => 'hots'
                ),
                array(
                    'name' => 'Starcraft 2',
                    'image' => 'sc2_small.png',
                    'alias' => 'sc2'
                ),
                array(
                    'name' => 'Diablo 3',
                    'image' => 'diablo3_small.png',
                    'alias' => 'd3'
                )

            )
        );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}

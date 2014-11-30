<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DreamhackHs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        DB::table('collection')->insert( array
            (
                array(
                    'name' => 'Dreamhack Winter 2014',
                    'game_id' => 1
                )
            )
        );

        DB::table('subcollection')->insert( array
            (
                array(
                    'name' => 'Grand Finals',
                    'collection_id' => 6
                ),
                array(
                    'name' => 'Semi Finals',
                    'collection_id' => 6
                ),
                array(
                    'name' => 'Quarter Finals',
                    'collection_id' => 6
                ),
            )
        );

        DB::table('video')->insert( array
        (
            array(
                'title' => 'Grand Final: Kolento vs Thijsnl',
                'youtubeId' => 'zhH4YcJdgak',
                'description' => 'Hearthstone Dreamhack 2014 Winter Grand Final: Kolento vs Thijsnl',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 6,
                'subcollection_id' => 17
            ),

            array(
                'title' => 'Semi Final: Kolento vs Strifecro',
                'youtubeId' => 'mGFws1bvf6I',
                'description' => 'Hearthstone Dreamhack Winter 2014 Semi Final Kolento vs Strifecro',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 6,
                'subcollection_id' => 18
            ),
            array(
                'title' => 'Semi Final: Lifecoach vs Thijsnl',
                'youtubeId' => '4-jxAIHfh-w',
                'description' => 'Hearthstone Dreamhack 2014 Winter Semi Final Lifecoach vs Thijsnl',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 6,
                'subcollection_id' => 18
            ),

            array(
                'title' => 'Quarter Finals: Faramir vs Lifecoach',
                'youtubeId' => 'ZAVY_gyQqMc',
                'description' => 'Hearthstone DreamHack 2014 Winter Quarter Finals Faramir vs Lifecoach',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 6,
                'subcollection_id' => 19
            ),
            array(
                'title' => 'Quarter Finals: Firebat vs Thijsnl',
                'youtubeId' => 'w0ZZfS2TXwQ',
                'description' => 'Hearthstone Dreamhack 2014 Winter Quarter Finals Firebat vs Thijsnl',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 6,
                'subcollection_id' => 19
            ),
            array(
                'title' => 'Quarter Finals: Kolento vs Neirea',
                'youtubeId' => 'ixxnv-qJD0U',
                'description' => 'Hearthstone Dreamhack 2014 Winter Quarter Finals Kolento vs Neirea',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 6,
                'subcollection_id' => 19
            ),
        ));
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

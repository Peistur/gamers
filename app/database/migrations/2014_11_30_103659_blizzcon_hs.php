<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlizzconHs extends Migration {

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
                    'name' => 'Blizzcon World Championship 2014',
                    'game_id' => 1
                )
            )
        );

        DB::table('subcollection')->insert( array
            (
                array(
                    'name' => 'Grand Finals',
                    'collection_id' => 5
                ),
                array(
                    'name' => 'Semi Finals',
                    'collection_id' => 5
                ),
                array(
                    'name' => 'Quarter Finals',
                    'collection_id' => 5
                ),
            )
        );

        DB::table('video')->insert( array
        (
            array(
                'title' => 'Grand Finals - Celestial vs. Firebat',
                'youtubeId' => '6iWjx4piaZE',
                'description' => 'Tiddler Celestial vs. Firebat - Grand Finals - Hearthstone World Championship 2014',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 5,
                'subcollection_id' => 14
            ),

            array(
                'title' => 'Semi-finals - Firebat vs. DTwo',
                'youtubeId' => 'Sn6hXr_7bhs',
                'description' => 'Firebat vs. DTwo - Semi-finals - Hearthstone World Championship 2014',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 5,
                'subcollection_id' => 15
            ),
            array(
                'title' => 'Semi-finals - Tiddler Celestial vs. Kranich',
                'youtubeId' => 'x0OT4AkpSm0',
                'description' => 'Tiddler Celestial vs. Kranich - Semi-finals - Hearthstone World Championship 2014',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 5,
                'subcollection_id' => 15
            ),

            array(
                'title' => 'Quarter-finals -  Kranich vs. Kolento',
                'youtubeId' => 'yxPLDFxd2LI',
                'description' => 'Kranich vs. Kolento - Quarter-finals - Hearthstone World Championship 2014',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 5,
                'subcollection_id' => 16
            ),
            array(
                'title' => 'Quarter-finals - Tiddler Celestial vs. Tarei',
                'youtubeId' => 'hI8PSqaXTh0',
                'description' => 'Tiddler Celestial vs. Tarei- Quarter-finals - Hearthstone World Championship 2014',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 5,
                'subcollection_id' => 16
            ),
            array(
                'title' => 'Quarter-finals - Kaor vs. Firebat',
                'youtubeId' => 'OYhao_A2hss',
                'description' => 'Kaor vs. Firebat - Quarter-finals - Hearthstone World Championship 2014',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 5,
                'subcollection_id' => 16
            ),
            array(
                'title' => 'Quarter-finals - StrifeCro vs. DTwo',
                'youtubeId' => 'Lkk4DxL-6t4',
                'description' => 'StrifeCro vs. DTwo - Quarter-finals - Hearthstone World Championship 2014',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 5,
                'subcollection_id' => 16
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

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hots2 extends Migration {

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
                    'name' => 'Go4Heroes 7',
                    'game_id' => 2
                )
            )
        );

        DB::table('subcollection')->insert( array
            (
                array(
                    'name' => 'Grand Finals',
                    'collection_id' => 8
                ),
                array(
                    'name' => 'Semi Finals',
                    'collection_id' => 8
                ),
                array(
                    'name' => 'Quarter Finals',
                    'collection_id' => 8
                ),
                array(
                    'name' => 'Ro 32',
                    'collection_id' => 8
                ),
            )
        );

        DB::table('video')->insert( array
        (
            array(
                'title' => 'WANP vs Hotslogs Final 1',
                'youtubeId' => 'xHeVDLmAVk4',
                'description' => 'We are NOT Prepared vs. Hotslogs Elite Final 1/2, ESL Go4Heroes #7',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 8,
                'subcollection_id' => 24
            ),
            array(
                'title' => 'WANP vs Hotslogs Final 2',
                'youtubeId' => 'h3QKEYQPdr0',
                'description' => 'We are NOT Prepared vs. Hotslogs Elite Final 2/2, ESL Go4Heroes #7',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 8,
                'subcollection_id' => 24
            ),

            array(
                'title' => 'WANP vs Imperitum Semi Final',
                'youtubeId' => 'kCXtyhb4jSU',
                'description' => 'We are NOT Prepared vs. Imperitum Semifinales, ESL Go4Heroes #7',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 8,
                'subcollection_id' => 25
            ),

            array(
                'title' => 'WANP vs  Ace Heaven Quarter Final',
                'youtubeId' => 'e3mqlsbLsdU',
                'description' => 'We are NOT Prepared vs. Ace Heaven Cuartos, ESL Go4Heroes #7',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 8,
                'subcollection_id' => 26
            ),

            array(
                'title' => 'WANP vs  Undercover Team RO32',
                'youtubeId' => 'nR9F05K3KDI',
                'description' => 'We are NOT Prepared vs. Undercover Team R-32, ESL Go4Heroes #7',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 8,
                'subcollection_id' => 27
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

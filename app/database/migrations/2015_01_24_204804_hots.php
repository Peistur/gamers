<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hots extends Migration {

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
                    'name' => 'Go4Heroes 6',
                    'game_id' => 2
                )
            )
        );

        DB::table('subcollection')->insert( array
            (
                array(
                    'name' => 'Grand Finals',
                    'collection_id' => 7
                ),
                array(
                    'name' => 'Semi Finals',
                    'collection_id' => 7
                ),
                array(
                    'name' => 'Quarter Finals',
                    'collection_id' => 7
                ),
                array(
                    'name' => 'Ro 8',
                    'collection_id' => 7
                ),
            )
        );

        DB::table('video')->insert( array
        (
            array(
                'title' => 'WANP vs Myinsanity Final 1',
                'youtubeId' => 'JKATRVj2ZOQ',
                'description' => 'We are not prepared vs. Myinsanity Final 1/3, ESL Go4Heroes #6',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 7,
                'subcollection_id' => 20
            ),
            array(
                'title' => 'WANP vs Myinsanity Final 2',
                'youtubeId' => 'i1TkAXO84Bc',
                'description' => 'We are not prepared vs. Myinsanity Final 2/3, ESL Go4Heroes #6',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 7,
                'subcollection_id' => 20
            ),
            array(
                'title' => 'WANP vs Myinsanity Final 3',
                'youtubeId' => 'ccU3zWYLFww',
                'description' => 'We are not prepared vs. Myinsanity Final 3/3, ESL Go4Heroes #6',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 7,
                'subcollection_id' => 20
            ),

            array(
                'title' => 'WANP vs Myinsanity SemiFinal',
                'youtubeId' => 'E8wJpjbBSOM',
                'description' => 'We are not prepared vs.Team Refuse Semifinal, ESL Go4Heroes #6',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 7,
                'subcollection_id' => 21
            ),

            array(
                'title' => 'WANP vs Myinsanity Quarter Final',
                'youtubeId' => '0afx5fmrSq4',
                'description' => 'We are not prepared vs. Imperitum Cuartos, ESL Go4Heroes #6',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 7,
                'subcollection_id' => 22
            ),

            array(
                'title' => 'WANP vs Myinsanity Ro8',
                'youtubeId' => 'jyuN9sJfqCY',
                'description' => 'We are not prepared vs. AAA Octavos, ESL Go4Heroes #6',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 7,
                'subcollection_id' => 23
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

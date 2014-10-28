<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reset3 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        DB::table('video')->truncate();

        DB::table('collection')->truncate();

        DB::table('subcollection')->truncate();

        DB::table('game')->truncate();

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
                )
            )
        );

        DB::table('collection')->insert( array
            (
                array(
                    'name' => 'SeatStory Cup II',
                    'game_id' => 1
                ),
                array(
                    'name' => 'ViaGame House Cup',
                    'game_id' => 1
                ),
                array(
                    'name' => 'Hots Invitational',
                    'game_id' => 2
                ),
                array(
                    'name' => 'WCS Europe 2014 Season 3',
                    'game_id' => 3
                ),

            )
        );

        DB::table('subcollection')->insert( array
            (
                // Viagame
                array(
                    'name' => 'Grand Finals',
                    'collection_id' => 2
                ),
                array(
                    'name' => 'Semi Finals',
                    'collection_id' => 2
                ),
                array(
                    'name' => 'Quarter Finals',
                    'collection_id' => 2
                ),


                // Seat Story Cup II
                array(
                    'name' => 'Final',
                    'collection_id' => 1
                ),
                array(
                    'name' => 'Semi Finals',
                    'collection_id' => 1
                ),
                array(
                    'name' => 'Ro8',
                    'collection_id' => 1
                ),

                // Hots invitational
                array(
                    'name' => 'Grand Final',
                    'collection_id' => 3
                ),
                array(
                    'name' => 'Winner Bracket Final',
                    'collection_id' => 3
                ),
                array(
                    'name' => 'El Nexo vs MouseSports',
                    'collection_id' => 3
                ),
                array(
                    'name' => 'El Nexo vs Empire',
                    'collection_id' => 3
                ),

                // WCS Europe 2014 Season 3
                array(
                    'name' => 'Grand Final',
                    'collection_id' => 4
                ),
                array(
                    'name' => 'Semi Finals',
                    'collection_id' => 4
                ),
                array(
                    'name' => 'Quarter Finals',
                    'collection_id' => 4
                )
            )
        );

        // Seat Story Cup II
        DB::table('video')->insert( array
        (
            array(
                'title' => 'Final: Savjz vs Mirrari',
                'youtubeId' => 'o8HRHyo8qfw',
                'description' => 'SeatStory Cup II Final: Savjz vs Mirrari (19.10.2014)',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 1,
                'subcollection_id' => 4
            ),

            array(
                'title' => 'Semifinal: Theude vs Mirrari',
                'youtubeId' => 'D-gB3hrsxpM',
                'description' => 'SeatStory Cup II Semifinal #2: Theude vs Mirrari (19.10.2014)',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 1,
                'subcollection_id' => 5
            ),
            array(
                'title' => 'Semifinal: Savjz vs Xixo',
                'youtubeId' => '4DG6f5HPrZI',
                'description' => 'SeatStory Cup II Semifinal #1: Savjz vs Xixo (19.10.2014)',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 1,
                'subcollection_id' => 5
            ),

            array(
                'title' => 'Ro8: Mirrari vs Cabrix',
                'youtubeId' => 'tewpVDdd6pc',
                'description' => 'SeatStory Cup II Ro8: Mirrari vs Cabrix (19.10.2014)',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 1,
                'subcollection_id' => 6
            ),
            array(
                'title' => 'Ro8: Trump vs Theude',
                'youtubeId' => 'n_UpI9eMJYk',
                'description' => 'SeatStory Cup II Ro8: Trump vs Theude (19.10.2014)',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 1,
                'subcollection_id' => 6
            ),
            array(
                'title' => 'Ro8: Savjz vs Kolento',
                'youtubeId' => 'QjXtshQeVEk',
                'description' => 'SeatStory Cup II Ro8: Savjz vs Kolento (19.10.2014)',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 1,
                'subcollection_id' => 6
            ),
            array(
                'title' => 'Ro8: Reynad vs Xixo',
                'youtubeId' => 'hC5tx3RgFB4',
                'description' => 'SeatStory Cup II Ro8: Reynad vs Xixo (19.10.2014)',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 1,
                'subcollection_id' => 6
            ),
        ));

        //Viagame
        DB::table('video')->insert( array
            (
                array(
                    'title' => 'Grand Finals - Kolento vs Amaz',
                    'youtubeId' => '_7WNKw3BNsk',
                    'description' => 'Viagame House Cup Hearthstone - Grand Finals - Kolento vs Amaz',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 2,
                    'subcollection_id' => 1
                ),

                array(
                    'title' => 'Semi Final - Kolento Vs Tidesoftime',
                    'youtubeId' => 'nEufjJKB95Y',
                    'description' => 'ViaGame House Cup Semi Final - Kolento Vs Tidesoftime',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 2,
                    'subcollection_id' => 2
                ),
                array(
                    'title' => 'Semi Finals - Forsen vs Amaz',
                    'youtubeId' => '27Dq9YCSDKE',
                    'description' => 'Viagame House Cup Hearthstone Semi Final - Forsen vs Amaz',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 2,
                    'subcollection_id' => 2
                ),

                array(
                    'title' => 'Quarter Final - Rdu Vs Forsen',
                    'youtubeId' => 'uCfj66t7gjo',
                    'description' => 'ViaGame House Cup Quarter Final - Rdu Vs Forsen',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 2,
                    'subcollection_id' => 3
                ),
                array(
                    'title' => 'Quarter Final - TidesofTime vs Seloko',
                    'youtubeId' => 'Jk2oqTPPSXc',
                    'description' => 'Viagame House Cup Quarter Final - TidesofTime vs Seloko',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 2,
                    'subcollection_id' => 3
                ),

            )
        );

        //Viagame
        DB::table('video')->insert( array
        (
            array(
                'title' => 'El Nexo vs. mYinsanity',
                'youtubeId' => '01bCEQTDjcU',
                'description' => 'El Nexo vs. mYinsanity - Grand Final Invitational',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 3,
                'subcollection_id' => 7
            ),

            array(
                'title' => 'Empire vs. mYinsanity - Game 1',
                'youtubeId' => 'bM2IyWQNvdQ',
                'description' => 'Empire vs. mYinsanity - Game 1 - WB Final',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 3,
                'subcollection_id' => 8
            ),
            array(
                'title' => 'Empire vs. mYinsanity - Game 2',
                'youtubeId' => '3JzF2tTeJU0',
                'description' => 'Empire vs. mYinsanity - Game 2 - WB Final',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 3,
                'subcollection_id' => 8
            ),

            array(
                'title' => 'MouseSports vs. El Nexo - Game 1',
                'youtubeId' => 'h85LsTnJpcw',
                'description' => 'MouseSports vs. El Nexo - Game 1',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 3,
                'subcollection_id' => 9
            ),
            array(
                'title' => 'MouseSports vs. El Nexo - Game 2',
                'youtubeId' => 'qllWYZUd9kw',
                'description' => 'MouseSports vs. El Nexo - Game 2',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 3,
                'subcollection_id' => 9
            ),

            array(
                'title' => 'El Nexo vs. Empire - Game 1',
                'youtubeId' => 'GXEyUMZpUMw',
                'description' => 'El Nexo vs. Empire - Game 1',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 3,
                'subcollection_id' => 10
            ),
            array(
                'title' => 'El Nexo vs. Empire - Game 2',
                'youtubeId' => 'cjO_MQmwVXw',
                'description' => 'El Nexo vs. Empire - Game 2',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 3,
                'subcollection_id' => 10
            ),
            array(
                'title' => 'El Nexo vs. Empire - Game 3',
                'youtubeId' => '2OGbjqVFpDA',
                'description' => 'El Nexo vs. Empire - Game 3',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 3,
                'subcollection_id' => 10
            ),

        ));

        // WCS Europe 2014 Season 3
        DB::table('video')->insert( array
        (
            array(
                'title' => 'MMA vs. YoDa (TvT) - Grand Final',
                'youtubeId' => 'QHpJPSs9ED0',
                'description' => 'MMA vs. YoDa (TvT) - Grand Final - WCS Europe 2014 Season 3',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 4,
                'subcollection_id' => 11
            ),

            array(
                'title' => 'Golden vs. YoDa (ZvT) - Semifinal',
                'youtubeId' => 'x1FbdY4Azm8',
                'description' => 'Golden vs. YoDa (ZvT) - Semifinal - WCS Europe 2014 Season 3',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 4,
                'subcollection_id' => 12
            ),
            array(
                'title' => 'MMA vs. San (TvP) - Semifinal',
                'youtubeId' => 'jIhJuz9cuQ8',
                'description' => 'MMA vs. San (TvP) - Semifinal - WCS Europe 2014 Season 3',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 4,
                'subcollection_id' => 12
            ),

            array(
                'title' => 'MC vs. YoDa (PvT) - Quarterfinal',
                'youtubeId' => 'Udq2gBgstSM',
                'description' => 'MC vs. YoDa (PvT) - Quarterfinal - WCS Europe 2014 Season 3',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 4,
                'subcollection_id' => 13
            ),
            array(
                'title' => 'Happy vs. Golden (TvZ) - Quarterfinal',
                'youtubeId' => 'Io2WzbJZie0',
                'description' => 'Happy vs. Golden (TvZ) - Quarterfinal - WCS Europe 2014 Season 3',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 4,
                'subcollection_id' => 13
            ),
            array(
                'title' => 'Bunny vs. San (TvP) - Quarterfinal',
                'youtubeId' => '9ctNenJK_eo',
                'description' => 'Bunny vs. San (TvP) - Quarterfinal - WCS Europe 2014 Season 3',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 4,
                'subcollection_id' => 13
            ),
            array(
                'title' => 'MMA vs. ForGG (TvT) - Quarterfinal',
                'youtubeId' => 'gmPKBV363qU',
                'description' => 'MMA vs. ForGG (TvT) - Quarterfinal - WCS Europe 2014 Season 3',
                'game_id' => 1,
                'category_id' => 1,
                'language_id' => 1,
                'collection_id' => 4,
                'subcollection_id' => 13
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

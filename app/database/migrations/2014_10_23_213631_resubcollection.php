<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Resubcollection extends Migration {

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
            $table->string('image');
        });

        Schema::dropIfExists('language');

        Schema::create('language', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
        });

        Schema::dropIfExists('category');

        Schema::create('category', function($table)
        {
            $table->increments('id');
            $table->string('name');
        });

        Schema::dropIfExists('collection');

        Schema::create('collection', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('game_id');
            $table->timestamps();
        });

        Schema::dropIfExists('subcollection');

        Schema::create('subcollection', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('collection_id');
            $table->timestamps();
        });

        Schema::dropIfExists('video');

        Schema::create('video', function($table)
        {
            $table->increments('id');
            $table->string('youtubeId');
            $table->integer('game_id');
            $table->integer('collection_id');
            $table->integer('subcollection_id');
            $table->integer('category_id');
            $table->integer('language_id');
            $table->string('title');
            $table->string('description');
            $table->timestamps();
        });


        DB::statement("ALTER TABLE ".DB::getTablePrefix()."video CHANGE created_at created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL");

        DB::table('video')->insert( array
            (
                // Viagame
                array(
                    'title' => 'Quarter final - Kolento vs Ekop - Game 1',
                    'youtubeId' => '2EJIHILBSBA',
                    'description' => 'Hearthstone ViaGame House Cup - Quarter final ! Day 2 - Kolento vs Ekop - Game 1',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 1,
                    'subcollection_id' => 1
                ),
                array(
                    'title' => 'Quarter final - Kolento vs Ekop - Game 2',
                    'youtubeId' => 'WTsZOnHz2pw',
                    'description' => 'Hearthstone ViaGame House Cup - Quarter final ! Day 2 - Kolento vs Ekop - Game 2',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 1,
                    'subcollection_id' => 1
                ),
                array(
                    'title' => 'Quarter final - Kolento vs Ekop - Game 3',
                    'youtubeId' => 'tx0PcViqEwY',
                    'description' => 'Hearthstone ViaGame House Cup - Quarter final ! Day 2 - Kolento vs Ekop - Game 3',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 1,
                    'subcollection_id' => 1
                ),
                array(
                    'title' => 'Quarter final - Kolento vs Ekop - Game 4',
                    'youtubeId' => 'ujGUSIqlISU',
                    'description' => 'Hearthstone ViaGame House Cup - Quarter final ! Day 2 - Kolento vs Ekop - Game 4',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 1,
                    'subcollection_id' => 1
                ),
                array(
                    'title' => 'Quarter final - Kolento vs Ekop - Game 5',
                    'youtubeId' => 'po3Sa8ju4D4',
                    'description' => 'Hearthstone ViaGame House Cup - Quarter final ! Day 2 - Kolento vs Ekop - Game 5',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 1,
                    'subcollection_id' => 1
                ),
                array(
                    'title' => 'Quarter final - Kolento vs Ekop - Game 6',
                    'youtubeId' => 'DtGPlinimvw',
                    'description' => 'Hearthstone ViaGame House Cup - Quarter final ! Day 2 - Kolento vs Ekop - Game 6',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 1,
                    'subcollection_id' => 1
                ),

                array(
                    'title' => 'Quarter final - TidesofTime vs Seloko - Game 1',
                    'youtubeId' => 'Wu48s38qX6o',
                    'description' => 'Hearthstone ViaGame House Cup - Quarter final ! Day 2 - TidesofTime vs Seloko - Game 1',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 1,
                    'subcollection_id' => 2
                ),
                array(
                    'title' => 'Quarter final - TidesofTime vs Seloko - Game 2',
                    'youtubeId' => 'uQha0SImD6k',
                    'description' => 'Hearthstone ViaGame House Cup - Quarter final ! Day 2 - TidesofTime vs Seloko - Game2',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 1,
                    'subcollection_id' => 2
                ),
                array(
                    'title' => 'Quarter final - TidesofTime vs Seloko - Game 3',
                    'youtubeId' => 'cl-_B5BgD5c',
                    'description' => 'Hearthstone ViaGame House Cup - Quarter final ! Day 2 - TidesofTime vs Seloko - Game 3',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 1,
                    'subcollection_id' => 2
                ),
                array(
                    'title' => 'Quarter final - TidesofTime vs Seloko - Game 4',
                    'youtubeId' => 'PMCHu1NyZdY',
                    'description' => 'Hearthstone ViaGame House Cup - Quarter final ! Day 2 - TidesofTime vs Seloko - Game 4',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 1,
                    'subcollection_id' => 2
                ),
                array(
                    'title' => 'Quarter final - TidesofTime vs Seloko - Game 5',
                    'youtubeId' => 'y43TPdVLE-A',
                    'description' => 'Hearthstone ViaGame House Cup - Quarter final ! Day 2 - TidesofTime vs Seloko - Game 5',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 1,
                    'subcollection_id' => 2
                ),
                array(
                    'title' => 'Quarter final - TidesofTime vs Seloko - Game 6',
                    'youtubeId' => '12LPkUMg7Aw',
                    'description' => 'Hearthstone ViaGame House Cup - Quarter final ! Day 2 - TidesofTime vs Seloko - Game 6',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 1,
                    'subcollection_id' => 2
                ),

                array(
                    'title' => 'Group A: Amaz vs Jinshen Part 1',
                    'youtubeId' => 'V43GUdscZUw',
                    'description' => 'Hearthstone ViaGame House Cup Group A: Amaz vs Jinshen Part 1',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 1,
                    'subcollection_id' => 3
                ),
                array(
                    'title' => 'Group A: Amaz vs Jinshen Part 2',
                    'youtubeId' => 'b1PFXhwulws',
                    'description' => 'Hearthstone ViaGame House Cup Group A: Amaz vs Jinshen Part 2',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 1,
                    'collection_id' => 1,
                    'subcollection_id' => 3
                )
            )
        );

        DB::table('video')->insert( array
            (
                array(
                    'title' => 'Final Torneo',
                    'youtubeId' => '42ykzZ3WmHg',
                    'description' => 'Final Torneo PlayHS',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 2,
                    'collection_id' => 3,
                    'subcollection_id' => 5
                ),
                array(
                    'title' => 'Final Cup 6',
                    'youtubeId' => 'NYaoS-rRfYc',
                    'description' => 'Final Cup 6 Doky vs ZetPro',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 2,
                    'collection_id' => 3,
                    'subcollection_id' => 5
                ),
                array(
                    'title' => 'Final Torneo HS',
                    'youtubeId' => 'a2sN93Xcfxg',
                    'description' => 'Final Torneo HS',
                    'game_id' => 1,
                    'category_id' => 1,
                    'language_id' => 2,
                    'collection_id' => 3,
                    'subcollection_id' => 5
                ),
                array(
                    'title' => 'Baraja chaman',
                    'youtubeId' => '_PSOcqPizSQ',
                    'description' => 'Baraja Chaman Frodo',
                    'game_id' => 1,
                    'category_id' => 2,
                    'language_id' => 2,
                    'collection_id' => 4,
                    'subcollection_id' => 6
                ),

                array(
                    'title' => '[Diablo 3] Build de la Semana: Monje Sunwuko (Parche 2.1)',
                    'youtubeId' => 'Was_moqEp5g',
                    'description' => 'De nuevo, tenemos una nueva Build de la Semana. En esta ocasión, haré un repaso de la build de Monje con el set de Sunwuko, que se utilizar actualmente para rankear en fallas de nivel.',
                    'game_id' => 2,
                    'category_id' => 2,
                    'language_id' => 2,
                    'collection_id' => 2,
                    'subcollection_id' => 4
                )

            )
        );

        DB::table('game')->insert( array
            (
                array(
                    'name' => 'Hearthstone',
                    'image' => 'hearthstone_small.png'
                ),
                array(
                    'name' => 'Diablo 3',
                    'image' => 'diablo3_small.png'
                ),
                array(
                    'name' => 'Heroes of the Storm',
                    'image' => '.png'
                ),
                array(
                    'name' => 'World of Warcraft',
                    'image' => '.png'
                )

            )
        );

        DB::table('category')->insert( array
            (
                array(
                    'name' => 'Torneo'
                ),
                array(
                    'name' => 'Guía'
                )
            )
        );

        DB::table('language')->insert( array
            (
                array(
                    'name' => 'English',
                    'image' => '.png'
                ),
                array(
                    'name' => 'Spanish',
                    'image' => '.png'
                )
            )
        );

        DB::table('collection')->insert( array
            (
                array(
                    'name' => 'ViaGame House Cup',
                    'game_id' => 1
                ),
                array(
                    'name' => 'Builds',
                    'game_id' => 2
                ),
                array(
                    'name' => 'Otros Torneos',
                    'game_id' => 1
                ),
                array(
                    'name' => 'Decks',
                    'game_id' => 1
                )
            )
        );

        DB::table('subcollection')->insert( array
            (
                array(
                    'name' => 'Quarter final - Kolento vs Ekop',
                    'collection_id' => 1
                ),
                array(
                    'name' => 'Quarter final - TidesofTime vs Seloko',
                    'collection_id' => 1
                ),
                array(
                    'name' => 'Group A: Amaz vs Jinshen',
                    'collection_id' => 1
                ),
                array(
                    'name' => 'Monk',
                    'collection_id' => 2
                ),
                array(
                    'name' => 'Otros',
                    'collection_id' => 3
                ),
                array(
                    'name' => 'Shaman',
                    'collection_id' => 4
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

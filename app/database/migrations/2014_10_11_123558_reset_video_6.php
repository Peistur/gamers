<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResetVideo6 extends Migration {

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
            $table->string('logo');
        });

        Schema::dropIfExists('category');

        Schema::create('category', function($table)
        {
            $table->increments('id');
            $table->string('name');
        });

        Schema::dropIfExists('video');

        Schema::create('video', function($table)
        {
            $table->increments('id');
            $table->string('youtubeId');
            $table->integer('game_id');
            $table->integer('category_id');
            $table->string('title');
            $table->string('description');
            $table->timestamps();
        });


        DB::statement("ALTER TABLE ".DB::getTablePrefix()."video CHANGE created_at created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL");

        DB::table('video')->insert( array
            (
                array(
                    'title' => 'Final Torneo',
                    'youtubeId' => '42ykzZ3WmHg',
                    'description' => 'Final Torneo PlayHS',
                    'game_id' => 1,
                    'category_id' => 1
                ),
                array(
                    'title' => 'Final Cup 6',
                    'youtubeId' => 'NYaoS-rRfYc',
                    'description' => 'Final Cup 6 Doky vs ZetPro',
                    'game_id' => 1,
                    'category_id' => 1
                ),
                array(
                    'title' => 'Final Torneo HS',
                    'youtubeId' => 'a2sN93Xcfxg',
                    'description' => 'Final Torneo HS',
                    'game_id' => 1,
                    'category_id' => 1
                ),
                array(
                    'title' => 'Baraja chaman',
                    'youtubeId' => '_PSOcqPizSQ',
                    'description' => 'Baraja Chaman Frodo',
                    'game_id' => 1,
                    'category_id' => 2
                ),

                array(
                    'title' => 'Conocimiento',
                    'youtubeId' => 'solmHk8kJ7k',
                    'description' => 'Diablo 3. Mejorando el estilo de juego: Conocimiento',
                    'game_id' => 2,
                    'category_id' => 2
                ),
                array(
                    'title' => 'Análisis de la situación',
                    'youtubeId' => 'MFW8-jJk4uY',
                    'description' => 'Diablo 3. Mejorando el estilo de juego: Análisis de la situación',
                    'game_id' => 2,
                    'category_id' => 2
                ),
                array(
                    'title' => '[Diablo 3] Build de la Semana: Monje Sunwuko (Parche 2.1)',
                    'youtubeId' => 'Was_moqEp5g',
                    'description' => 'De nuevo, tenemos una nueva Build de la Semana. En esta ocasión, haré un repaso de la build de Monje con el set de Sunwuko, que se utilizar actualmente para rankear en fallas de nivel.',
                    'game_id' => 2,
                    'category_id' => 2
                ),

            )
        );

        DB::table('game')->insert( array
            (
                array(
                    'name' => 'Hearthstone',
                    'logo' => 'hearthstone_small.png'
                ),
                array(
                    'name' => 'Diablo 3',
                    'logo' => 'diablo3_small.png'
                ),
                array(
                    'name' => 'Heroes of the Storm',
                    'logo' => '.png'
                ),
                array(
                    'name' => 'World of Warcraft',
                    'logo' => '.png'
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

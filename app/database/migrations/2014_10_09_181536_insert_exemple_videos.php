<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertExempleVideos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('video', function($table)
        {
            $table->dropColumn('title');
        });
        Schema::table('video', function($table)
        {
            $table->string('title');
        });

        DB::statement("ALTER TABLE ".DB::getTablePrefix()."video CHANGE created_at created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL");

        $id = DB::table('video')->insert( array
            (
                array(
                    'title' => 'Final Torneo',
                    'url' => 'http://www.youtube.com/watch?v=42ykzZ3WmHg',
                    'imgUrl' => 'http://img.youtube.com/vi/42ykzZ3WmHg/0.jpg',
                    'description' => 'Final Torneo PlayHS'
                ),
                array(
                    'title' => 'Final Cup 6',
                    'url' => 'http://www.youtube.com/watch?v=NYaoS-rRfYc',
                    'imgUrl' => 'http://img.youtube.com/vi/NYaoS-rRfYc/0.jpg',
                    'description' => 'Final Cup 6 Doky vs ZetPro'
                ),
                array(
                    'title' => 'Final Torneo HS',
                    'url' => 'http://www.youtube.com/watch?v=a2sN93Xcfxg',
                    'imgUrl' => 'http://img.youtube.com/vi/a2sN93Xcfxg/0.jpg',
                    'description' => 'Final Torneo HS'
                ),
                array(
                    'title' => 'Baraja chaman',
                    'url' => 'http://www.youtube.com/watch?v=_PSOcqPizSQ',
                    'imgUrl' => 'http://img.youtube.com/vi/_PSOcqPizSQ/0.jpg',
                    'description' => 'Baraja Chaman Frodo'
                ),

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

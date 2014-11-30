<?php

class GameController extends SharedController {

    public function index( $name = null )
    {
        $game = Game::where( 'name', '=', $name )->first();

        $this->data['game'] = $game;

        if( $game )
        {
            //$data['videos'] = Video::where( 'game_id', '=', $game->id )->take( 9 )->get();
            //$this->data['videos'] = Video::where( 'game_id', '=', $game->id )->paginate( 6 );
            //$this->data['collections'] = Collection::with('videos')->where( 'game_id', '=', $game->id )->get();

            /*$this->data['collections'] = Collection::with(
                [
                    'videos' => function( $video )
                    {
                        $video->take(4);
                    },
                    'subcollections'
                ]
            )->where( 'game_id', '=', $game->id )->get();*/

            $this->data['collections'] = Collection::with(
                [
                    'videos' => function( $video )
                        {
                            $video->with(
                                [
                                    'subcollection'
                                ]
                            )->take(4);
                        },
                    'subcollections'
                ]
            )->where( 'game_id', '=', $game->id )->orderBy('id','desc')->get();

            $collections = Collection::with(
                [
                    'subcollections'
                ]
            )->where( 'game_id', '=', $game->id )->orderBy('id','desc')->get();

            $i = 0;

            foreach ( $collections as $collection )
            {
                $videos = Video::with(
                    [
                        'subcollection'
                    ]
                )->where( 'collection_id', '=', $collection->id )->take(4)->get();

                $this->data['collections'][$i]->videos = $videos;
                $i++;
            }
        }
        else
        {
            //$data['videos'] = Video::all();
            //$this->data['videos'] = Video::paginate( 6 );
            Redirect::to('home');
        }

        return View::make( 'game', $this->data );
    }

}

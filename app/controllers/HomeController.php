<?php

class HomeController extends SharedController {

    public function index( $name = null )
    {
        /*$this->data['games'] = Game::with(
            [
                'collections' => function( $collecion )
                    {
                        $collecion->with(
                            [
                                'videos' => function( $video )
                                    {
                                        $video->take(1);
                                    }
                            ]
                        );
                    }
            ]
        )->get();*/




       /* $games = Game::with(
            array(
                'collections' => function( $query )
                    {
                        $query->orderBy('created_at','asc')->take(2);
                    }
            )
        )->get()->toArray();*/

        $games = Game::with(array('collections' => function($query)
            {
                $query->take(2)->get();

            }))->get();





        $games = Game::get()->toArray();

        foreach( $games as $key => $game )
        {
            $collections = Collection::whereGameId( $game['id'] )->take(2)->get()->toArray();

            $games[$key]['collections'] = $collections;

            foreach ( $collections as $collectionKey => $collection )
            {
                $videos = Video::whereCollectionId( $collection['id'] )->take(4)->get()->toArray();

                $games[$key]['collections'][$collectionKey]['videos'] = $videos;
            }
        }

        $games = json_decode(json_encode($games), FALSE);

        $this->data['games'] = $games;

        $this->data['allGames'] = Game::with( 'collections' )->get();

        return View::make( 'home', $this->data );
    }

}

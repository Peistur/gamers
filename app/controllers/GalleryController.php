<?php

class GalleryController extends SharedController {

    public function index( $name = null )
    {
        $game = Game::where( 'name', '=', $name )->first();

        if( $game )
        {
            //$data['videos'] = Video::where( 'game_id', '=', $game->id )->take( 9 )->get();
            $this->data['videos'] = Video::where( 'game_id', '=', $game->id )->paginate( 6 );
        }
        else
        {
            //$data['videos'] = Video::all();
            $this->data['videos'] = Video::paginate( 6 );
        }

        return View::make( 'gallery', $this->data );
    }

}

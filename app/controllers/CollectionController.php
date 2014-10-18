<?php

class CollectionController extends SharedController {

    public function index( $name = null )
    {
        $game = Game::where( 'name', '=', $name )->first();

        if( $game )
        {
            //$data['videos'] = Video::where( 'game_id', '=', $game->id )->take( 9 )->get();
            //$this->data['videos'] = Video::where( 'game_id', '=', $game->id )->paginate( 6 );
            $this->data['collections'] = Collection::where( 'game_id', '=', $game->id );
        }
        else
        {
            //$data['videos'] = Video::all();
            $this->data['collections'] = null;
        }

        return View::make( 'list', $this->data );
    }

}

<?php

class ListController extends SharedController {

    public function index( $name = null )
    {
        $game = Game::where( 'name', '=', $name )->first();

        if( $game )
        {
            //$data['videos'] = Video::where( 'game_id', '=', $game->id )->take( 9 )->get();
            //$this->data['videos'] = Video::where( 'game_id', '=', $game->id )->paginate( 6 );
            //$this->data['collections'] = Collection::where( 'game_id', '=', $game->id )->take( 9 )->get();
            $this->data['collections'] = Collection::with('subcollections')->get();
        }
        else
        {
            //$data['videos'] = Video::all();
            $this->data['collections'] = null;
        }

        /*foreach($this->data['collections'] as $collection)
        {
            if( isset($collection->subcollections)){
                foreach($collection->subcollections as $subcollections)
                    var_dump($subcollections->id);die();
            }

        }*/

//var_dump($this->data['collections']);die();
        return View::make( 'list', $this->data );
    }

}

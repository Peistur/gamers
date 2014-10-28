<?php

class VideoController extends SharedController {

    public function show( $id )
    {
        $this->data['video'] = Video::find( $id );

        return View::make( 'video', $this->data );
    }

    public function create()
    {
        $this->data['games'] = Game::all()->lists('name', 'id');

        $this->data['collections'] = Collection::all()->lists('name', 'id');

        $this->data['subcollections'] = Subcollection::all()->lists('name', 'id');

        $this->data['languages'] = Language::all()->lists('name', 'id');

        //var_dump($games);die();

        return View::make( 'video.create', $this->data );
    }

    public function insert()
    {
        $video = new Video;

        $video->fill( Input::All() );

        $video->save();

        return Redirect::route( 'video.create' );
    }

}

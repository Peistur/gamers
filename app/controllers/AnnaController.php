<?php

class AnnaController extends SharedController {

    public function index()
    {
        return View::make( 'anna.form' );
    }

    public function secondstep()
    {
        $inputs = Input::All();


        if ( isset( $inputs['p1'] ) && isset( $inputs['p2'] ) && isset( $inputs['p3'] ) )
        {
            return View::make( 'anna.greeting' );
        }
        else
        {
            return View::make( 'anna.error' );
        }

    }

    public function regal()
    {
        return View::make( 'anna.regal' );
    }



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

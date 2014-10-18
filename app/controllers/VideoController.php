<?php

class VideoController extends SharedController {

    public function index( $id )
    {
        $this->data['video'] = Video::find( $id );

        return View::make( 'video', $this->data );
    }

    public function update( $id )
    {
        if( !isset( $id ) )
        {
            Redirect::to('home');
        }
        $this->data['video'] = Video::find( $id );

        return View::make( 'video.update', $this->data );
    }

}

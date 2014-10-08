<?php

class GalleryController extends BaseController {

    public function index()
    {
        $videos = Video::all();

        $data['videos'] = $videos;

        foreach ( $videos as $video )
        {

        }

        return View::make( 'gallery', $data );
    }

}

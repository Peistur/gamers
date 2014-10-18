<?php

class HomeController extends SharedController {

    public function index( $name = null )
    {
        return View::make( 'home', $this->data );
    }

}

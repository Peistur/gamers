<?php

class SharedController extends BaseController {

    protected $data;

    public function __construct()
    {
        $this->data['allGames'] = DB::table('game')->distinct()->get();
    }

}

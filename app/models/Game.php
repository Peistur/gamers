<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Game extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'game';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array();

    public function videos()
    {
        return $this->hasMany( 'Video' );
    }

    public function collections()
    {
        return $this->hasMany( 'Collection' );
    }

    public function subcollections()
    {
        return $this->hasManyThrough('Post', 'User');
    }
}

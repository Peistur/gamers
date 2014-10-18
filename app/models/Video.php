<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Video extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'video';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array();

    public function game()
    {
        return $this->belongsTo('Game');
    }

    public function category()
    {
        return $this->belongsTo('Category');
    }

    public function language()
    {
        return $this->belongsTo('Language');
    }

    public function collection()
    {
        return $this->belongsTo('Collection');
    }

    public function subcollection()
    {
        return $this->belongsTo('Subcollection');
    }
}

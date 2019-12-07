<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function User()
    {
       return $this->belongsTo('App\User');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public function votes()
    {
        return $this->morphMany('App\Vote', 'votable');
    }
}

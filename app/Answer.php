<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function votes()
    {
        return $this->morphMany('App\Vote', 'votable');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function User()
    {
       return $this->hasOne('App\User');
    }

    public function votables()
    {
        return $this->morphTo();
    }
}

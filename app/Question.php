<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Question extends Model
{

    protected $guarded = [
        'user_id',
        'vote_count',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function answers()
    {
       return $this->hasMany('App\Answer');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }

    public function scopeMostVoted($query){
        return $query->orderBy('vote_count', 'desc');
    }

    public function scopeUnaswered($query){
        return $query->doesntHave('answers');
    }

    public function scopeFilterByType($query, $type){
        return $query->when($type == 'most voted', function ($query, $sortBy) {
                return $query->mostVoted();
            }, function ($query) {
                return $query;
            });
    }

}

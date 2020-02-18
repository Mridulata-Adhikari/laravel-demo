<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function articles()
    {
        return $this->hasManyThrough('App\Article', 'App\User', 'country_id', 'user_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // public function users(){
    //     return $this->belongsToMany(User::class)->withPivot(['name'])->withTimestamps();
    // }

    public function role_user()
    {

        return $this->hasMany('App\User');
    }

    public function users(){

        return $this->belongsToMany('App\User');
    }
}

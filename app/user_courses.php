<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_courses extends Model
{
    protected $guarded = [];

    // public function courses()
    // {
    //     return $this->belongsToMany(course::class);
    // }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

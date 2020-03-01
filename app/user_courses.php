<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_courses extends Model
{
    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

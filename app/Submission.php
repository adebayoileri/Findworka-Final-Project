<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    public function users(){
        return $this->belongsToMany(User::class)->withPivot('course_name');
    }

    public function task(){
        return belongsTo("App\Assignment");
    }
}

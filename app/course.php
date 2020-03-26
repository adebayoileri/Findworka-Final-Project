<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    // public function program(){
    //     return $this->belongsTo(course::class);
    // }
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot(['progress','payment_id','payment_status_id']);
    }
}

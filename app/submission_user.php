<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class submission_user extends Model
{
    public function users(){
       return $this->belongsTo(User::class);
    }
}

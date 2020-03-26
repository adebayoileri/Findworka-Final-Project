<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function payment_statuses(){
        return $this->belongsToMany(payment_status::class);
    }

    public function users(){
        return $this->belongsToMany(Payment::class);
    }
}

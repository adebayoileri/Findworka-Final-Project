<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // public function courses(){
    //     return $this->hasMany(course::class);
    // }

    public function enrolls()
    {
        return $this->hasMany(user_courses::class);
    }
    public function submissions(){
        return $this->belongsToMany(Assignment::class)->withPivot('course_id');
    }

    public function assignments(){
        return $this->belongsToMany(Assignment::class)->withPivot('course_id');
    }

    public function privilege(){
        return $this->belongsTo(privilege::class);
    }
}

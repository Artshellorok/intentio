<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
<<<<<<< HEAD

=======
    public function problems(){
        return $this->belongsToMany('\App\Problem')->withPivot('offer', 'status','channel_id');
    }
    public function projects(){
        return $this->hasMany('\App\Project');
    }
>>>>>>> af47d6fd0896a29b3b43914343826a030adcc6bd
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'name', 'email', 'password',
=======
        'name', 'email', 'password', 'category_id'
>>>>>>> af47d6fd0896a29b3b43914343826a030adcc6bd
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Boytunghc\LaravelMongoNotifiable\Notifiable;

class User extends Authenticatable

{   
    use Notifiable;
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

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}

<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
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
    
    public function profiles()
    {
        return $this->hasOne('App\Profile');
    }

    public function waves() 
     {
        return $this->hasMany('App\Wave');
     }

    public function followers() 
     {
       return $this->hasMany('App\Follower')->withTimestamp();
    }

    public function Followings()
    {
        return $this->hasMany('App\Follower')->withTimestamp();
    }
    
   /* public function isFollowing($user)
   * {
   *    return $this->following()->where('following_id', 'user_id')->count();
   * }
   */

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function LikedWaves()
    {
        return $this->morphedMany('App\Wave', 'Likeable')->whereDeletedAt(null);
    }
         
}

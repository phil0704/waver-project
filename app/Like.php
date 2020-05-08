<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $fillable = ['likes_id', 'likeable_type', 'user_id'];
    protected $table = 'likes';
     
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function waves()
    {
        return $this->morphedMany('App\Wave', 'likes');
    }

    public function comments()
    {
        return $this->belongsTo('App\Comment', 'likes');
    }

}

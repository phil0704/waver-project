<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    protected $fillable = ['user_id', 'wave_id', 'parent_id', 'is_gif'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function waves()
    {
        return $this->belongsTo('App\Wave');
    }

    public function replies()
    {
        return $this->hasmany(Comment::class, 'parent_id');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

}

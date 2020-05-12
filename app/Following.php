<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Following extends Model
{
    //
    protected $fillable = ['user_id', 'following_id', 'followed'];
    protected $primaryKey = 'user_id';

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}

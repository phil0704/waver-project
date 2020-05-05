<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wave extends Model
{
    //
    protected $fillable = array(
        'wave',
    );

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}

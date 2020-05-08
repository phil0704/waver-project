<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\Wave;
use App\User;

class LikeController extends Controller
{
    //
    public function show($id)
    {
        return view('like.profile', ['like' => Like::findOrFail($id)]);
    }
}

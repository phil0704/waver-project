<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Wave;
use App\Profile;
use App\User;
use App\Comment;
use App\Follower;


class ProfileController extends Controller
{
    //
    public function index($user)
    {
        //$user = DB::table('user')->where('user', 1)->get();
        $user = User::findOrFail($user);
      //  $waves = Wave::where('user_id', $user->id)->get();

        return view('layout', [
            'user' => $user
           // 'waves' => $waves
        ]);
    }
}

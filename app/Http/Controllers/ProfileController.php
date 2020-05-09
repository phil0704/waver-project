<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Wave;
use App\Profile;
use App\User;
use App\Comment;
use App\Follower;
use App\Notification\NewFollower;


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

    public function followOrUnfollowUser(Request $request)
    { 
       if ($request->follow) {
        // Follow
        $user = User::findOrFail($request->user);
        Auth::user()->following()->attach($user->id);
        $user->notify(new newFollower(Auth::user()));
       } else {
        // Unfollow
        $user = User::findOrFail($request->user);
        Auth::user()->following()->detach($user->id);
       }
        return redirect('/u/' . $user->id);

    }
 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* 
* You need to add this support\facades\DB to read your DB!
*/
use Illuminate\Support\Facades\DB;
use App\Wave;
use App\User;
use App\Profile;
use App\Like;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user(Request $request, User $user)
    {
      return view('profiles.show', compact('user') );
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      // $following = Auth::user()->following->pluck('id');
       //$waves = Wave::whereIn('user_id', $following)->orWhere('user_id', Auth::user()->id)->get();
        
       //waves = DB::table('waves')->where('user_id', 1)->get();
       //$waves = Auth::user()->waves;
       $waves = Wave::all();
       
        /*
        * The name waves came from my DB name!
        */

        return view('home', [
            'waves' => $waves
         /*
        * The name waves came from my DB name too!
        * This waves message will show in the home blade.
        */

        ]);
    }
} 

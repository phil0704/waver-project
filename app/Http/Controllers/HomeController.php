<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
/* 
* You need to add this support\facades\DB to read your DB!
*/
use Illuminate\Support\Facades\DB;
use Auth;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $waves = DB::table('waves')->where('user_id', 1)->get();
       // $waves = Auth::user()->waves;
       
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

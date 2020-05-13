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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index(Request $request, $user)
    {
        //$user = DB::table('user')->where('user', 1)->get();
        $user = User::findOrFail($user);
      //  $waves = Wave::where('user_id', $user->id)->get();

        return view('layout', [
            'user' => $user
           // 'waves' => $waves
        ]);
    }
/*
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
    */



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function index()
    {
        $profiles = Profile::query( )
        ->join( 'users', 'profiles.user_id', '=', 'users.id' ) // faster to do both queries together
        ->get(); // we want them all because we are looping through them in our index

        $waves = Wave::all();
       
      
    return view('layout.index', compact('layout', 'waves'));
    }
    */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if ( $user ) // 
            return view('profiles.create');
        else // 
            return redirect('/waves');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ( $user = Auth::user() ) //only store data if user is logged in. 
        {

        $validatedData = $request->validate(array( 
            'username' => 'required|max:25',
            

        ));
        $user = Auth::user();

        $profile = Profile::where("user_id", "=", $user->id)->firstOrFail();

        $profile->user_id = $user->id;
        $profile->username = $validatedData['username'];
        $profile->profile_pic = 'profile_pic';
        $profile->save();
        
    
         return redirect('/waves')->with('success', 'Profile saved.');
        }// redirect by default
         return redirect('/waves');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $user = User::findOrFail($id);
        $waves = Wave::where('user_id', '=', $id);

        return view ('profiles.show', compact('user', 'waves') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ( $user = Auth::user() ) {

            $user = User::findOrFail($id);


            return view( 'profiles.edit', compact('') );
        }
        return redirect('/waves');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ( $user = Auth::user() ) {
            $validatedData = $request->validate(array( 
                'username' => 'required|max:25',
             ));
    
             Profile::whereId($id)->update($validatedData);
             return redirect('/waves')->with('success', 'Profile has been updated.');
            }
            return redirect('/waves');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ( $user = Auth::user() ) {
            $profile = Profile::findOrFail($id);
    
            $profile->delete();
    
            return redirect('/waves')->with('success', 'Profile has been deleted.');
        }
        return redirect('/waves');
    }

   
}
 

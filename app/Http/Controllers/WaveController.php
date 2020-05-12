<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;
use App\Wave;
use App\Profile;
use App\Comment;
use App\Follower;
use App\User;
/*use Illuminate\Support\Facades\Input;
*/
class WaveController extends Controller
{
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      
        if ( $user = Auth::user() ) 
        {
            $profile = Profile::where("user_id", "=", $user->id)->firstOrFail(); 

            $comments_count = Wave::count("comments_count");
          
            $follower = Follower::where("follower_id", "=", $user->id)->find('followed');

            $waves = Wave::query( )
            ->join( 'users', 'waves.user_id', '=', 'users.id' )
            ->select( 'waves.id',
            'users.id as user_id',
            'users.name',
            'waves.created_at',
            'waves.picture',
            'waves.likes_count',
            'waves.comments_count',  )
            ->orderBy('waves.id', 'desc')
            ->paginate(10);
            
            $wave = Wave::where("user_id", "=", $user->id)->first();   


        return view('waves.index', compact('waves', 'wave', 'follower', 'comments_count', 'profile', 'user')  );

        }  else 

            $waves = Wave::query()
                ->join( 'users', 'waves.user_id', '=', 'users.id' )
                ->select( 'waves.id',
                'users.id as user_id',
                'users.name',
                'waves.created_at',
                'waves.picture',
                'waves.likes_count',
                'waves.comments_count',  )
                ->orderBy('waves.id', 'desc')
                ->get();

          
            return view('waves.index', compact('waves'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        if ( $user = Auth::user() ) //
        {
        $validatedData = $request->validate(array( 
            'message' => 'required|max:255',
        ));
        $wave = new Wave();
        $wave->user_id = $user->id;
        $wave->content = $validatedData['message'];
        $wave->picture = 'picture';
        if ( isset ($request->is_gif) && $request->is_gif === 'true') {
            $post->is_gif = true;
          }
        $wave->save();
        
    
         return redirect('/waves')->with('success', 'Wave saved.');
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
        $wave = Wave::findOrFail($id);

        $comment = new Comment();

        $user = User::findOrFail($wave->user_id);

        $profile = Profile::where("user_id", "=", $user->id)->firstOrFail(); 

        return view( 'waves.show', compact('wave', 'comment', 'profile', 'user') );

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
            
            $wave = Wave::findOrFail($id);

            return view( 'waves.edit', compact('wave') );
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
                'message' => 'required|max:255',
             ));
    
             Wave::whereId($id)->update($validatedData);

             return redirect('/waves')->with('success', 'Waves has been updated.');
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
            $wave = Wave::findOrFail($id);
    
            $wave->delete();
    
            return redirect('/waves')->with('success', 'Wave has been deleted.');
        }
        return redirect('/waves');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = Auth::user();
        if ( $user )  
            {

             $wave = new Wave;
             $wave->message = $request->message;
             $wave->user_id = $user->id;
             $wave->picture = 'picture';
             $wave->save();
             

             return redirect('/home')->with('success', 'Wave has been saved' );
                
            }
           
        else // not logged in, can not make posts. redirect to index
            return redirect('/waves');
        
    }


}

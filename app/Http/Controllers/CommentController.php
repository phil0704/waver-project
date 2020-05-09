<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\User;
use App\Comment;
use App\Profile;

class CommentController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::findOrFail($id);

        $wave = Wave::findOrFail($id);

        $user = User::findOrFail($wave->user_id);


        return view( 'comments.show', compact('comment') );
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

            $comment = Comment::findOrFail($id);

            $profile = Profile::where("user_id", "=", $user->id)->firstOrFail(); 

            if ( isset($comment->is_gif ) && ($comment->is_gif === 'true') ) {
         
                $comment->is_gif = 1;
                
            }

            return view( 'comments.edit', compact('comment') );
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
                'content' => 'required|max:255',
             ));
    
             Comment::whereId($id)->update($validatedData);

             return redirect('/waves')->with('success', 'Comment has been updated.');
            }
            return redirect('/waves');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if ( $user ) // we are logged in and can create waves
            return view('comments.create');
        else // not logged in, can not make waves. redirect to index.
            return redirect('/waves');
    }
 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class postComment extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except'=>['index']]);
      //  $this->middleware('auth');
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $comments=Comment::all();
        return view('page.showComment',compact('comments'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(REQUEST $request)
    {
    $body=$request->commentText;
    $comment=new Comment;
    $comment->body=$body;
    $comment->save();
    return redirect('comment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showComment=Comment::find($id);
        return view('page.show',compact('showComment')) ;    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment=Comment::find($id);
        // if(auth()->user()->id!==$comment->user_id){
        //     return redirect('comment');
        // }
        return view('page.edit',compact('comment'));
        
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

     $comment=Comment::find($id);
     $comment->body=$request->get('commentText');
     $comment->save();


     return redirect('/comment');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $comment= Comment::find($id);

      $comment->delete();
      return back();

    }
}

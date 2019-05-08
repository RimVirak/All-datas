<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Comment;
use Auth;



class CommentController extends Controller
{

  public function __construct(){
    $this->middleware('auth',['except'=>['comment']]);
    // $this->middleware('auth');
  }

    public function comment(){
        $data = \App\Comment::all();
        return view('pages.comment',compact('data'));
    }
    public function showCreate(){
        return view('pages.createComment');
      }
    public function stores(Request $request){
        
        $title = $request->title;
        $body = $request->body;
        $post = new Comment;
        $post->title= $title;
        $post->user_id = Auth::user()->id;
        // $post->body= $body;
        $post ->save();
        return redirect('comment');
    
      }

      public function editComment($id){
        $comment = Comment::find($id);
        if(auth()->user()->id!==$comment->user_id){
          return redirect ('comment')->with('successDelete','Unauthorized Page');
        }
        // dd($comment);
        return view('pages.editComment',compact('comment'));
      }

      public function update(Request $request,$id){
        // $request->validate([
        //   'title'=>'required',
        //   'body'=>'required'
        // ]);
        $comment = Comment::find($id);
        $comment->title = $request->get('title');
        $comment->save();
        return redirect('/comment');
      }

      public function delete($id){
        $comment= Comment::find($id);
        $comment->delete();
        return redirect('/comment')->with('delete','Comment is deleted');
        // return back();
      }
}

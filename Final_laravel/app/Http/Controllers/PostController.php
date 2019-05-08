<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post= \App\Post::orderBy('updated_at','desc')->get();
        
        return view('pages.viewPost')->with('post',$post);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag= \App\Tag::all();
        
        return view('pages.createPost')->with('tag',$tag);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $post=\App\Post::create($request->all());
       
            $check=$request->check;
            foreach($check as $key => $item){
            $post->tags()->attach($item);
            
        }
        return redirect('post');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =\App\Post::findOrFail($id);
        
        
        $tagall=\App\Tag::all();
        $posttag =$post->tags;
        $checkupdate= $tagall->diff($posttag);
        // $collection=$post->tags->pluck('id');
        // $collection->transform(function($item,$key){
        //     return (string)$item;
        // });    
       
        return view('pages.updatePost',compact('post','posttag','checkupdate','tagall'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */           

     
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        Post::findOrFail($id)->update($request->all());
        $post =Post::findOrFail($id);
        $post->tags()->detach();
        $updateTage= $request->check;
        $post->tags()->attach($updateTage);
        //dd($updateTage);
        return redirect()->route('post.index');
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {


        \App\Post::findOrFail($id)->delete();
    
        return redirect()->route('post.index');
    }
}

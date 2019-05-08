<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;


class postController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=Post::all();
        return view('PagePost.showPost',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag=Tag::all();
        return view('PagePost.create',compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title=$request->title;
        $body=$request->body;
        $post=new Post;  
        $post->title=$title;
        $post->body=$body;
        $post->save(); 
        $checkbox=$request->check;       
            foreach($checkbox as $key=>$item){
                    $post->tags()->attach($item); 

                
            
        }
       
        return redirect('/post');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poster=Post::find($id);
        $tag=Tag::all();
        // $postTags=$post->$tags;
        // $tagDiff= $allTags->diff($postTags);
        return view('PagePost.edit',compact('poster'),compact('tag'));
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
            $post=Post::find($id); 
            $post->title=$request->get('title');
            $post->body=$request->get('body');
            $post->save();  
       
         
        $checkbox2=$request->checkbox;
        foreach($checkbox2 as $key=>$item2){
            $post->tags()->attach($item2);
}

            return redirect('/post');
     

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::FindOrFail($id);
        $post->tags()->detach();
        $post->delete();
        return redirect()->route('post.index');


    }

}

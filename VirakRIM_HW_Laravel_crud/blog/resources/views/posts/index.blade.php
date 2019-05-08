@extends('master')

     @section('content')
         <h1>All Post here</h1>
         @foreach($posts as $post)
         <div class="card">
            <div class="card-body">
               <p>
                 <h6>
                   <a href="{{route('posts.show', $post->id)}}">
                       {{$post->title}}
                   </a>
                   <a href="{{route('posts.edit',$post->id)}}" class="btn btn-info btn-sm">Edit</a>
                    <form onsubmit="return confirm('Are you sure you want to delete this post?')" class=" d-inline-block" method="POST" action="{{route('posts.destroy',$post->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </h6>
               </p>
            </div>
         </div>
         @endforeach
          <div class="mt-4">
               {{$posts->links()}}
          </div>
   @endsection
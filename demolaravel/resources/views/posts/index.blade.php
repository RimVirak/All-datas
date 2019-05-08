

@extends('layouts.app')

@section('content')
@if(count($posts)>0)
@foreach ($posts as $post)
  <div class="card">
      <div class="card-content">
            <h2 class="card-title">
             <a href="/posts/{{$post->id}}">{{$post->title}}</a>
            </h2>
            {{-- <p>{{$post->body}}</p> --}}
      </div>
      <div class="card-action">
          <a href="#" >{{$post->created_at}}</a>
      </div>
  </div>
@endforeach
{{$posts->links()}}
@else
<p>Post not fount! (404)</p>
@endif 
@endsection
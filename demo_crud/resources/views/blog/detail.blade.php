@extends('blog.blog')
@section('content')

      <a href="{{route('post.create')}}" class="btn btn-primary">Add New Post</a>
        <div class="card mt-4">
            <div class="card-boby">
            <div class="card-title">{{$post->title}}</div>
            <p class="card-text">{{$post->description}}</p>
            </div>
        </div>
@endsection
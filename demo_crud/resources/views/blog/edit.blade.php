@extends('blog.blog')
@section('content')
<form action="{{route('post.update',$post->id)}}" method="POST">
    @csrf
    @method('put')
         <div class="form-group">
         <input type="text" name="title" class="form-control" placeholder="Title...." value="{{$post->title}}">
         </div>
        <div class="form-group">
        <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Description...">{{$post->description}}</textarea>
        </div>
         <div class="form-group">
             <button type="submit" class="btn btn-primary">Update </button>
         </div>
     </form>
@endsection
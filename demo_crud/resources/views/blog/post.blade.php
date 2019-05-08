@extends('blog.blog')
@section('content')
<form action="{{route('post.store')}}" method="POST">
    @csrf
         <div class="form-group">
             <input type="text" name="title" class="form-control" placeholder="Title....">
         </div>
        <div class="form-group">
                <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Description..."></textarea>
        </div>
         <div class="form-group">
             <button type="submit" class="btn btn-primary">Add Post</button>
         </div>
     </form>
@endsection
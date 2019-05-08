@extends('master')
@section('content')
<h2 class="my-3">Update Post</h2>
@if ($errors->all())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
     @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
     @endforeach
 </div>   
@endif

@if (session()->has('Message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
       {{session()->get('Message')}}
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
  </div>  
@endif

<form action="{{route('posts.update',$post->id)}}" method="post">
    @csrf
    @method('put')
       <div class="form-group">
       <label for="title" >Title</label>
           <input type="text" name="title" id="title" class="form-control" value="{{($post->title)}}" >
       </div>
       <div class="form-group">
            <label for="title">Content</label>
       <textarea type="text" name="content" cols="30" rows="10"id="title" class="form-control">{{($post->content)}}</textarea>               
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Edit Now</button>
        </div>
   </form>     
@endsection
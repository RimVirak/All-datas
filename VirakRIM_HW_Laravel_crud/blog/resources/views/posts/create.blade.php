@extends('master')
@section('content')
<h2 class="my-3">Add A New Post</h2>
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
<form action="{{route('posts.store')}}" method="post">
    @csrf
       <div class="form-group">
           <label for="title">Title</label>
           <input type="text" name="title" id="title" class="form-control" >
       </div>
       <div class="form-group">
            <label for="title">Content</label>
             <textarea type="text" name="content" cols="30" rows="10"id="title" class="form-control"></textarea>               
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-success">Add New</button>
        </div>
   </form>     
@endsection
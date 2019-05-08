@extends('blog.blog')
@section('content')

      <a href="{{route('post.create')}}" class="btn btn-primary">Add New Post</a>
      
        <div class="jumbotron">
            <h1 class="text-center display-1">Cambodia News</h1>
        </div>
        @foreach ($posts as $item)
        <div class="card mt-4">
            <div class="card-boby">
            <div class="card-title">{{$item->title}}</div>

            <form action="{{route('post.destroy',$item->id)}}" method="POST" class="float-right">
              <a href="{{route('post.show',$item->id)}}" class="btn btn-success btn-sm">Detail</a>
              <a href="{{route('post.edit',$item->id)}}" class="btn btn-info btn-sm">edit</a>
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger btn-sm" >delete</button>
              </form>
            </div>
     
        </div>
        @endforeach
@endsection

@extends('layout.nav')
@section('content')
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="container mt-4">

<a href="{{route('post.create')}}" class="btn btn-info text-white" method="POST">Create New Post</a>

    @foreach ($post as $item)
   
        <div class="card mt-4 shadow-lg">
            <div class="card-header">
                <h3>{{$item['title']}}</h3>
                
            </div>
            <div class="card-body">
                
                <p>{{$item['description']}}</p>
                <a href="#"><i class="material-icons">thumb_up</i></a>
                
                <p>Date: {{$item->created_at->diffForHumans()}}</p>
                
                @foreach ($item->tags()->pluck('name') as $items)  
                <button class=" btn btn-info btn-sm text-white">{{ $items}}</button> 
                @endforeach 
                
               
           
            
        </div>
            <div class="card-footer float-right">
  
                    <a href="{{route('post.edit',$item->id)}}" class="btn btn-info float-right text-white">Update</a> 
                
                    <form action="{{route('post.destroy',$item->id)}}" method="POST" class="float-right">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </div>
        </div>
        
    @endforeach

</div>
@endsection
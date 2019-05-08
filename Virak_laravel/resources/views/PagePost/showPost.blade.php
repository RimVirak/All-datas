<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Posts</title>
    <link rel="stylesheet" href="{{asset('Css/app.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body class="">
    <div class="container mt-4">
        <a href="{{Route('post.create')}}" class="btn btn-success" data-toggle="tooltip" data-placement="right" title="Create New Post"> Create Post</a>
        <div class="row">
                @foreach ($post as $item)
                <div class="col-lg-10 ">

                         <div class="card mt-4 shadow-lg">
                             <div class="card-header text-center">{{$item['title']}}</div>
                               
                               <div class="card-body">
                                   <p>{{$item['body']}}</p> 
                                   <a href="{{route('post.edit',$item->id)}}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="left" title="Update Post">Update</a>
                                   <a href="" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="right" title="Delete Post">Delete</a>
                               </div>
                                  <div class="card-footer  ">
                                      <small class="text-left">Post at :{{ $item->created_at->diffForHumans()}}</small>

                                      @foreach ( $item->tags()->pluck('name') as $itemName )
                                      <small class="color text-primary float-right "> {{$itemName}} </small>
                                      @endforeach
                                  </div>
                              </div>
                            <br>
                         </div>
                         <br>
                @endforeach
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
    <script>
        $(function () {
             $('[data-toggle="tooltip"]').tooltip()
         })  
     </script>
        
</body>
</html>
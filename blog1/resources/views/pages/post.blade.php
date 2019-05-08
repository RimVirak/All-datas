<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="container mt-4">
        <div ><h1>All Post</h1></div>
        <button class="btn bg-danger">New Posts</button>
        <div class="card shadow-lg mt-4">
                
                @foreach ($post as $value=>$data)
        <div class="card-body ">
            
            <h4>{{$data['title']}}</h4>
            <p> {{$data['created_at']->diffForHumans()}}</p>
            <p> {{$data['body']}}</p>
            <i class="material-icons ">edit</i>
            <i class="material-icons">delete</i>
            <hr>
        </div>
  


@endforeach
</div>
</div> 
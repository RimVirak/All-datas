<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Post</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{asset('Css/app.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>
    <div class="container mt-5">
              <div class="card shadow-lg">
                  <div class="card-header text-center bg-warning">
                      Add New Posts
                  </div>
                  <div class="card-body shadow">
                      <form action="{{route('post.store')}}" method="post">
                          @csrf
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Enter title" name="title">
                           </div>
                           <div class="form-group">
                                 <textarea  id="" cols="150" rows="10" class="form-control" name="body" placeholder="Enter your comment"></textarea>
                        </div>
                        
                           <div class="form-check mr-4">
                                @foreach ($tag as $item)
                                 <input type="checkbox"  value="{{$item->id}}"  name="check[]"><label for="">{{$item->name}}</label>
                                 @endforeach 

                                </div>
                            



                                <button class="btn btn-primary btn-success" type="submit" data-position="bottom" data-tooltip="I am a tooltip">Save</button>
                   

                      </form>
                  </div>
              </div>
            
          </div>
    </div>
</body>
<Script>
    $(document).ready(function(){
    $('.tooltipped').tooltip();
</Script>
</html>
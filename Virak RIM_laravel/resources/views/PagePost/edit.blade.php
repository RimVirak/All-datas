<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{asset('Css/app.css')}}">


</head>
<body>
    <div class="container mt-5">
              <div class="card shadow-lg">
                  <div class="card-header text-center bg-danger text-white">
                      Update Posts
                  </div>
                  <div class="card-body shadow">

                      <form action="{{route('post.update',$poster->id)}}" method="post">
 
                      
                          @csrf
                          @method('patch')
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Enter title" name="title" value="{{$poster['title']}}">
                           </div>
                           <div class="form-group">
                                 <textarea  id="" cols="150" rows="10" class="form-control" name="body" placeholder="Enter your comment">{{$poster['body']}}</textarea>
                        </div>                       
                           <div class="form-check mr-4">
                               @foreach ($poster->tags->pluck('name') as $item)
                               <input type="checkbox" value="" class="" name="check[]" checked ><label for="">{{$item}}</label>
                               @endforeach
                               <br>
                               @foreach ($tag as $item)
                               <input type="checkbox" value="{{$item->id}}" class="" name="checkbox[]" ><label for="">{{$item['name']}}</label>
                               @endforeach

                              

                             </div>                              
                                <button class="btn btn-success" type="submit">Edit Now</button>
                      </form>
                  </div>
              </div>
            
          </div>
    </div>
</body>
</html>
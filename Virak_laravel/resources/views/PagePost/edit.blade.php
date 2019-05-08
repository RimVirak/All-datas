<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edite Students</title>
    {{-- <link rel="stylesheet" href=""> --}}
    <link rel="stylesheet" href="{{asset('Css/app.css')}}">

</head>
<body>
    <div class="container  mt-4">
          <div class="card">
                  <div class="card-header text-center text-white bg-danger">
                     Update Students
                  </div>
                  <div class="card-body shadow-lg">

                      <form action="{{route('post.update',$poster->id)}}" method="post">
 
                      
                          @csrf
                          @method('patch')
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Enter title" name="title" value="{{$poster['title']}}">
                           </div>
                           <div class="form-group">
                                 <textarea  id="" cols="150" rows="10" class="form-control" name="body" placeholder="Enter your comment">{{$poster['body']}}</textarea>
                        </div>                       
                           <div class="form-check">
                               @foreach ($poster->tags->pluck('name') as $item)
                                   
                               <input type="checkbox" value="" class="" name="check[]" ><label for="">{{$item}}</label>
                               @endforeach
                                </div>
                                
                                <button class="btn btn-success">Update Now</button>


                      </form>
                  </div>
              </div>
            
          </div>
    </div>
</body>
</html>
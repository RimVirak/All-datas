<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Students</title>
    {{-- <link rel="stylesheet" href=""> --}}
    <link rel="stylesheet" href="{{asset('Css/app.css')}}">   

</head>
<body>
    <div class="container mt-4 ">
              <div class="card ">
                  <div class="card-header text-center bg-warning">
                      Add students
                  </div>
                  <div class="card-body shadow-lg">
                      <form action="{{route('post.store')}}" method="POST">
                          @csrf
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Enter Your Topic" name="title" >
                           </div>
                           <div class="form-group">
                                 <textarea  id="" cols="150" rows="10" class="form-control" name="body" placeholder="Enter Something that you want"></textarea>
                        </div>
                        
                           <div class="form-check">
                                @foreach ($tag as $item)
                                 <input type="checkbox"  value="{{$item->id}}"  name="check[]" ><label for="">{{$item->name}}</label>
                                 @endforeach 

                                </div>
                    
                                <button class="btn btn-success" type="submit">Add</button>
                      </form>
                  </div>
              </div>
            
          </div>
    </div>
</body>
</html>

    

@section('content')
<div class="container mt-5 ">
   <hr class="shadow-lg">
       <div class="row">
           <div class="col-4"></div>
           <div class="col-4">
                   <div class="card shadow-lg">
                           <div class="card-header text-center">
                               <h3>Create New Student</h3>
                              
                           </div>
                           <div class="card-body">
                              <form action="{{route('create.store')}}" method="POST">
                                   @csrf
                                  <div class="form-group">
                                      <input type="text" name="title" id="" class="form-control" placeholder="Title">
                                  </div>
                                  <div class="form-group">
                                   
                                    <input type="text" name="email" id="" class="form-control" placeholder="Email">
                                  </div>
                                 
                                   <div class="form-check-inline">
                   
                                   @foreach ($course as $item) 
                                   <input type="checkbox" name="check[]" id="" class="form-check-input text-white" value="{{$item->id}}"><label for="">{{$item->name}}</label>
                                   
                                   @endforeach
                                  </div> 
                                  
                                  <div class="form-group float-right">
                                      <button type="submit" name="submit" class="btn btn-info text-white">Create</button>
                                  </div>
                              </form>
                           </div>
           </div>
           <div class="col-4"></div>
       </div>
   </div>
</div>
@endsection
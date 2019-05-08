
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 @extends('layout.nav')
 @section('content')
<div class="container mt-5 ">
    <a href="{{route('post.index')}}" class="btn btn-success btn-sm text-white" method="POST"><i class="material-icons">arrow_back</i></a>
    <hr class="shadow-lg">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                    <div class="card shadow-lg">
                            <div class="card-header text-center">
                                <h3>Create New Things</h3>
                               
                            </div>
                            <div class="card-body">
                               <form action="{{route('post.store')}}" method="POST">
                                    @csrf
                                   <div class="form-group">
                                       <input type="text" name="title" id="" class="form-control" placeholder="Title">
                                   </div>
                                   <div class="form-group">
                                    
                                    <textarea type="text" name="description"  cols="15" rows="5" id="" class="form-control" placeholder="Description" value=""></textarea >
                                   </div>
                                  
                                    <div class="form-check-inline">
                    
                                    @foreach ($tag as $item) 
                                    <input type="checkbox" name="check[]" id="" class="form-check-input text-white" value="{{$item->id}}"><label for="">{{$item->name}}</label>
                                    
                                    @endforeach
                                   </div> 
                                   
                                   <div class="form-group float-right">
                                       <button type="submit" name="submit" class="btn btn-info text-white">Add Now</button>
                                   </div>
                               </form>
                            </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</div>
@endsection
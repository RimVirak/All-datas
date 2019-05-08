
 @extends('layout.nav')
 @section('content')
<div class="container mt-4 ">
    <a href="{{route('post.index')}}" class="btn btn-info text-white" method="POST">Back</a>
    <hr class="shadow-lg">
    <div class="card shadow-lg">
        <div class="card-header text-center">
            <h3> Post Job</h3>
           
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
                   {{-- @foreach ($tag as $item) 
                <input type="checkbox" name="check[]" id="" class="form-check-input text-white" value="{{$item->id}}"><label for="">{{$item->name}}</label>
                
                @endforeach --}}

                @foreach ($tag as $item) 
                <input type="checkbox" name="check[]" id="" class="form-check-input text-white" value="{{$item->id}}"><label for="">{{$item->name}}</label>
                
                @endforeach
               </div> 
               
               <div class="form-group float-right">
                   <button type="submit" name="submit" class="btn btn-info text-white">submit</button>
               </div>
           </form>
        </div>
    </div>
</div>
@endsection
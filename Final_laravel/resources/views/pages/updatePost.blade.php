
 @extends('layout.nav')
 @section('content')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css">
<div class="container mt-4 ">
    <a href="{{route('post.index')}}" class="btn btn-info text-white" method="POST">Back</a>
    <hr class="shadow-lg">
    <br>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
                <div class="card shadow-lg">
                        <div class="card-header text-center bg-danger">
                                <h3>Edit New Thing</h3>          
                            </div>
                    <div class="card-body">
                       <form action="{{route('post.update',$post->id)}}" method="POST">
                            @csrf
                         @method('put')
                           <div class="form-group">
                               
                               <input type="text" name="title" id="" class="form-control" placeholder="Title" value="{{$post->title}}">
                           </div>
                           <div class="form-group">
                            <textarea type="text" name="description"  cols="15" rows="5" id="" class="form-control" placeholder="Description" value="">{{$post->description}}</textarea >
                           </div>
                           <div class="form-check-inline">
                         
                          
                            @foreach ( $posttag as $item)
                            <input type="checkbox" name="check[]"  value="{{$item->id}}" checked><label for="">{{$item['name']}}</label>
                        @endforeach
                        @foreach ($checkupdate as $item)
                            <input type="checkbox" name="check[]" value="{{$item->id}}"><label for="">{{$item['name']}}</label>
                        @endforeach 
                        </div >
                           
                           
                           <div class="form-group float-right">
                               <button type="submit" name="submit" class="btn btn-info text-white">Edit Now</button>
                           </div>
                       </form>
                    </div>
                </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.js"></script>
<script>


</script>

@extends('layout.nav')
@section('content')
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="container mt-5">

<a href="{{route('post.create')}}" class="btn btn-info text-white" method="POST">Create New</a>

    @foreach ($post as $item)
   
        <div class="card mt-4 shadow-lg ">
            <div class="card-header text-center">
                <h3>{{$item['title']}}</h3>
            </div>
            <div class="card-body">
                
                <p>{{$item['description']}}</p>
                {{-- <a href="#"><i class="material-icons">thumb_up</i></a> --}}
                
                @foreach ($item->tags()->pluck('name') as $items)  
                <button class=" btn float-right btn-secondary btn-sm text-white">{{ $items}}</button>
                <p class="date text-danger">Date: {{$item->created_at->diffForHumans()}}</p>
                @endforeach 
                
               
           
            
        </div>
            <div class="card-footer float-left">
  
                    <a href="{{route('post.edit',$item->id)}}" class="btn btn-info btn-sm float-left text-white">Update</a> 
                
                    <form action="{{route('post.destroy',$item->id)}}" method="POST" class="float-left">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>

            </div>
        </div>
        
    @endforeach
    <br><br>
</div>
@endsection

<div class="modal fade" tabindex="-1" role="dialog" id="delete">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure want to Delete?.</p>
              <small id="post"></small>
            </div>
            <div class="modal-footer">
                <form action="" id="fid" method="post">
                    @csrf
                    @method('delete')
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit"  class="btn btn-primary">Yes</button>
                </form>
            </div>
          </div>
        </div>
      </div>
      <script src="{{asset('Js/app.js')}}" ></script>
    
        <script>
          $('#delete').on('show.bs.modal', function (event) { 
            var button = $(event.relatedTarget)
            var id = button.data('id')  
            console.log(id)
            var post = button.data('name')
            console.log(post)
            var modal = $(this)
            modal.find('#post').text(post)
            
            var url="{{url('post')}}/"+id;
            console.log(url);
            $('#fid').attr('action',url); 
        })
        
      </script>  
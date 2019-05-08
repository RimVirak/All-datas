<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show all Posts</title>
    <link rel="stylesheet" href="{{asset('Css/app.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    .<div class="container mt-5">
        <a href="{{Route('post.create')}}" class="btn btn-success mb-4" data-toggle="tooltip" data-placement="right" title="Create New Post">Add New Posts</a>
        <div class="row">
                @foreach ($post as $item)
                <div class="col-lg-10 ">

                         <div class="card mt-4 shadow-lg">
                             <div class="card-header text-center bg-secondary ">{{$item['title']}}</div>
                               
                               <div class="card-body">
                                   <p>{{$item['body']}}</p> 
                                   <a href="{{route('post.edit',$item->id)}}" class="text-info"><i class="material-icons" data-toggle="tooltip" data-placement="left" title="Update Post">edit</i> </a>
                                   <a href=""   data-toggle="modal" data-target="#delete"  data-name="{{$item['title']}}" class="text-danger" data-id="{{$item['id']}}" ><i class="material-icons" data-toggle="tooltip" data-placement="right" title="Delete Post">delete</i></a>
                                             
                               </div>
                                  <div class="card-footer  ">
                                      <small class="text-left text-danger">Time has post is :{{ $item->created_at->diffForHumans()}}</small>
                                      
                                      @foreach ( $item->tags()->pluck('name') as $itemName )
                                      <button class="btn btn-dark btn-sm float-right">{{$itemName}}</button><small class="color text-info float-right btn btn-sm">  </small>
                                      @endforeach
                                  </div>
                              </div>
                         </div>
                         <br>
                @endforeach
            </div>
        </div>
    </div><br><br>
<!-- Modal -->
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
</body>
<script>
  $(function () {
       $('[data-toggle="tooltip"]').tooltip()
   })  
</script>
</html>
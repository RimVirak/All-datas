<h3>This is post pages</h3>

<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<ul class='list-group'>
  
  @if (Auth::check())
    <div>
    <a href="{{url('createComment')}}"><button class="btn btn-warning" type="add_news" name="btn-submit">Add New</button></a> 
    </div>
  @endif

    @if(session('delete'))
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
         {{session('delete')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
      @endif

         @foreach ($data as $item)
         <li class="list-group-item">
     
         <small>{{$item->created_at->diffForHumans()}}</small>
         <h1>{{$item->title}}</h1>
         <p>{{$item->body}}</p>
         {{-- <p>By:{{$item->user->name}}</p> --}}
         {{-- <p>By:{{$item->user->email}}</p> --}}
         @auth
            {{-- @if (Auth::user()->id==$comment->user_id) --}}
         <a href="editComment/{{$item->id}}"><i class="material-icons text-info">edit</i></a>
         <a href="#deleteModal" data-id="{{$item->id}}" data-toggle="modal" data-target="#deleteModal" data-title="{{$item->title}}"><i class="material-icons text-danger">delete</i></a>
            {{-- @endif --}}
         @endauth
        </li>
         @endforeach
     </ul>
{{-- Delect modal --}}

     <div id="deleteModal"class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Delete Comment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure to delect this Comment?</p>
               <small id="postTitle"></small>
            </div>
          <form id="fDelete" action="">
              @csrf
              @method('DELETE')
              
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
              <button type="submit" class="btn btn-danger">YES</button>
            </div>
           </form>
          </div>
        </div>
      </div>

      <script src="{{asset('js/app.js')}}"></script>
      <script>
            $('#deleteModal').on('show.bs.modal', function(event){
               var button = $(event.relatedTarget)
               var id = button.data('id')
               var title = button.data('title')
               console.log('id'+id);
               var modal = $(this)
               modal.find('#postTitle').text(title);
               var url = "{{url('delete/')}}/"+id;
               $('#fDelete').attr('action',url)
               console.log('url'+url);

            });
      </script>
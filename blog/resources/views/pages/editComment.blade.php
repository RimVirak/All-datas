<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <div class="container mt-4">
          <div class="card ">
                  <div class="card-header text-center"> Edit Comment</div>
                  <div class="card-body">
                  <form action="{{url('update/'.$comment->id)}}" method="POST">
                    @method('PATCH')
                    @csrf
                           <div class="form-group">
                               <p>Title</p>
                           <input type="text" value="{{$comment->title}}" name="title" class="form-control" placeholder="Username" required>
                           </div>
                           <div class="form-group">
                                <p>Body</p>
                                 <textarea name="body" value="{{$comment->body}}" id="" cols="145" rows="10" placeholder="Enter something"></textarea>
                           </div>
                           <div class="form-group">
                                <button class="btn btn-info" type="submit" name="btn-submit">Edit Now</button>
                           </div>
                       </form>
                  </div>
          </div>
          
      </div>
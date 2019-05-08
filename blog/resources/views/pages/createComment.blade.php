<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <div class="container mt-4">
          <div class="card ">
                  <div class="card-header text-center"> Create Post</div>
                  <div class="card-body">
                  <form action="{{url('store')}}" method="POST">
                    @csrf
                           <div class="form-group">
                               <p>Title</p>
                                 <input type="text" name="title" class="form-control" placeholder="Username" required>
                           </div>
                           <div class="form-group">
                                <p>Body</p>
                                 <textarea name="body" id="" cols="145" rows="10" placeholder="Enter something"></textarea>
                           </div>
                           <div class="form-group">
                                <button class="btn btn-warning" type="submit" name="btn-submit">Submit</button>
                           </div>
                       </form>
                  </div>
          </div>
          
      </div>
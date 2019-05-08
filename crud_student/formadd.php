
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <div class="container mt-4">
          <div class="card bg-success">
                  <div class="card-header text-center"> Add Student</div>
                  <div class="card-body">
                       <form action="processadd.php" method="post">
                           <div class="form-group">
                                 <input type="text" name="student" class="form-control" placeholder="Username" required>
                           </div>
                           <div class="form-group">
                                 <input type="text" name="email" class="form-control" placeholder="Email" required>
                           </div>
                           <div class="form-group">
                                 <input type="text" name="province" class="form-control" placeholder="Province" required>
                           </div>
                           <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit" name="btn-submit">Add News Students</button>
                           </div>
                       </form>
                  </div>
          </div>
          
      </div>
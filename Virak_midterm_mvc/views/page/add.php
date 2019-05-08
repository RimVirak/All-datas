


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container mt-4  ">
 <div class="card bg-warning"> 
 <div class="card-body"> 
  <div class="card-header text-center">Add New Student</div>
   <form action="../../index.php" method="POST">
      <div class="form-group">
            <input type="text" class="form-control" name="firstname" placeholder="Firstname"required>
      </div>
      <div class="form-group">
            <input type="text" class="form-control" name="lastname" placeholder="Lastname"required>
      </div>
      <div class="form-group">
            <input type="text" class="form-control" name="gender" placeholder="gender"required>
      </div>
      <div class="form-group">
           <input type="number" class="form-control" name="phone" placeholder="phone" required>
      </div>
      <div class="form-group">
           <input type="text" class="form-control" name="email" placeholder="email" required>
      </div>
      <div class="form-group">
           <input type="text" class="form-control" name="province" placeholder="province" required>
      </div>
      <div class="form-group">
          <a href="../../index.php"><i class="btn btn-dark btn-sm">Back</i></a>
          <button type="submit" name="btn-add" class="btn btn-success btn-sm">Add student</button>
      </div>
   </form>
 </div>
 </div>
</div>
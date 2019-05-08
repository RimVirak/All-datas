
    <?php include_once "connection.php"; 
       $id = $_GET['id'];
       $query = "SELECT * FROM tbl_students WHERE stu_id = $id";
       $result = mysqli_query($con,$query);

        
       foreach($result as $data):
    ?>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <div class="container mt-4">
          <div class="card bg-warning">
                  <div class="card-header text-center"> Update Student</div>
                  <div class="card-body">
                       <form action="processUpdate.php" method="post">
                           <input type="hidden" name="id" value=" <?php  echo $id ?>">
                           <div class="form-group">
                                 <input type="text" name="student" class="form-control" placeholder="Username" required value="<?php  echo $data['stu_name']; ?>">
                           </div>
                           <div class="form-group">
                                 <input type="text" name="email" class="form-control" placeholder="Email" required value="<?php  echo $data['stu_email']; ?> ">
                           </div>

                           <div class="form-group">
                               <select name="gender" class="form-control" required>
                                   <option value="Male" required>Male</option>
                                   <option value="Female">Female</option>
                                   <option value="Other">Otherr</option>
                               </select>
                           </div>
                           <br>
                           <br>
                           <div class="form-group">
                                 <input type="text" name="province" class="form-control" placeholder="Province" required value="<?php  echo $data['stu_province']; ?>">
                           </div>
                           <div class="form-group">
                                <button class="btn btn-info btn-block" type="submit" name="btn-update">Update Students</button>
                           </div>
                       </form>
                  </div>
          </div>
          
      </div>
    <?php endforeach; ?>

    <?php include_once "connection.php"; 
       $id = $_GET['id'];
       $query = "SELECT * FROM tbl_teacher WHERE tea_id = $id";
       $result = mysqli_query($connect,$query);

        
       foreach($result as $data):
        
    ?>
    <body class="bg-dark">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <div class="container mt-4 ">
      <div class="row " >
            <div class="col-4"></div>
            <div class="col-4">
            <div class=" card show-lg">
                  <div class="card-header text-center "> Update Teacher</div>
                  <div class="card-body ">
                       <form action="processUpdate.php" method="post">
                           <input type="hidden" name="id" value=" <?php  echo $id ?>">
                           <div class="form-group">
                                 <input type="text" name="teacher" class="form-control" placeholder="Username" required value="<?php  echo $data['tea_name']; ?>">
                           </div>
                           <div class="form-group">
                                 <input type="text" name="email" class="form-control" placeholder="Email" required value="<?php  echo $data['tea_email']; ?> ">
                           </div>
                           <div class="form-group">
                                 <input type="text" name="age" class="form-control" placeholder="Age" required value="<?php  echo $data['tea_age']; ?>">
                           </div>
                           <div class="form-group">
                               <select name="gender" class="form-control" required value="<?php  echo $data['tea_gender']; ?>">
                                   <option value="Male" required>Male</option>
                                   <option value="Female">Female</option>
                                   <option value="Other">Otherr</option>
                               </select>
                           </div>
                           <div class="col-4"></div>
                           <div class="form-group">
                                <button class="btn btn-info btn-block" type="submit" name="btn-update">Update Students</button>
                           </div>
                       </form>
                    </div>
                </div>
           </div>
    </body>
    <?php endforeach; ?>
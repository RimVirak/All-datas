
<?php  include_once "connection.php";?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <div  class="container mt-4">
   
       <p><a href="adduser.php " class="btn btn-info"> Add News </a></p>
       <hr>

          <table class="table table-striped table-bordered">
             <tr>
               <th> ID </th>
               <th> Name </th>
               <th> Email </th>
               <th> Province</th>
               <th> Gender </th>
               <th>Action</th>
             </tr>
             <?php  
                //  $query = "SELECT * FROM btl_students";
                $result = mysqli_query($con, "SELECT * FROM tbl_students");
                  foreach( $result as $row):

             ?>
               
               <tr>
                  <td><?php  echo $row['stu_id'];?></td>
                  <td><?php  echo $row['stu_name'];?></td>
                  <td><?php  echo $row['stu_email'];?></td>
                  <td><?php  echo $row['stu_province'];?></td>
                  <td><?php  echo $row['stu_gender'];?></td>
                  <td>
                       <a href="Delete.php?id=<?php  echo $row['stu_id']; ?> " class="btn btn-danger btn-sm " > Delete </a>
                       <a href="Update.php?id=<?php  echo $row['stu_id']; ?> " class="btn btn-info btn-sm " type="btn-update"> Update </a>
                  
                  </td>
               </tr>

             <?php 
                  endforeach;
              
             ?>
          </table> 
         
    </div>
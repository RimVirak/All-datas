
 <?php include_once "connection.php"; ?>
 
<main class="container" role="main">
<a href="?page=addUser" class="mt-4 mb-4 btn btn-primary"> Create Users</a>
<?php 
 $query = "SELECT * FROM tbl_user ORDER BY user_id DESC";
    $result = mysqli_query($conn, $query);
      
      ?>
<table id="tbl_data" class="table table-striped table-bordered" style="width:100%">   
   <thead>
       <tr>
           <th>Name</th>
           <th>City</th> 
           <th>Position</th>
           <th>Age</th>  
           <th>Actions</th>
       </tr>
   </thead>
   <tbody>
   <?php foreach($result as $data):?>
       <tr>
           <td><?php echo $data['username']?></td>
           <td><?php echo $data['city'] ?></td>
           <td><?php echo $data['position'] ?></td>
           <td><?php echo $data['age'] ?></td>
           <td>
              <div class="btn-group float-right">
                  <a href="?page=updateUsers&UserId=<?php echo $data['user_id']?>" class="btn btn-primary btn-sm" name="btn-update"> Updade</a>
                  <a href="?page=deleteUsers&UserId=<?php echo $data['user_id']?>" class="btn btn-danger btn-sm" > Delete</a>
              </div>
           </td>
       </tr>
   <?php endforeach; ?>   

   </tbody>
</table>
</main>

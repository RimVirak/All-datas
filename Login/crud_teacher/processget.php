
<?php  include_once "connection.php";?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Hidden brand</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 bg-danger" type="submit">Search</button>
    </form>
  </div>
</nav>
   <div  class="container mt-4">
   
       <p><a href="adduser.php " class="btn btn-info"> Add News </a></p>
       <hr>
      <thead>
          <table class="table table-bordered ">
             <tr class=" bg-warning">
               <th> ID </th> 
               <th> Name </th>
               <th> Email </th>
               <th> Province</th>
               <th> Gender </th>
               <th>Action</th>
             </tr>
         </thead>      
             <?php  
                //  $query = "SELECT * FROM btl_students";
                $query = "SELECT * FROM tbl_teacher";
                $result = mysqli_query($connect, $query);
                  foreach( $result as $row):

             ?>
               
               <tr>
                  <td><?php  echo $row['tea_id'];?></td>
                  <td><?php  echo $row['tea_name'];?></td>
                  <td><?php  echo $row['tea_email'];?></td>
                  <td><?php  echo $row['tea_age'];?></td>
                  <td><?php  echo $row['tea_gender'];?></td>
                  <td>
                       <a href="Delete.php?id=<?php  echo $row['tea_id']; ?> " class="btn btn-danger btn-sm " > Delete </a>
                       <a href="Update.php?id=<?php  echo $row['tea_id']; ?> " class="btn btn-info btn-sm " type="btn-update"> Update </a>
                  
                  </td>
               </tr>

             <?php 
                  endforeach;
              
             ?>
          </table> 
         
    </div>
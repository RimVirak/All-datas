<?php 
     if(isset($_POST["btn-submit"])){
         $gender = $_POST['gender'];
         $subject = $_POST['subject'];

?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <div class="container mt-4">
         <div class="card bg-warning shadow-lg"> 
              <div class="card-header">Result</div> 
              <div class="card-body">
                   <p><?php  echo $gender?></p>
                   <p><?php  echo $subject?></p>
              </div>
         </div>
           <hr>
           <p><a href="index.php" class="btn btn-danger"> Go Back</a></p>
    </div>
 <?php 
  }
   
  
 
 ?>


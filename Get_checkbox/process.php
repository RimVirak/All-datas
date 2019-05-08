<?php
     if(isset($_POST['btn-check'])){
        $subject = $_POST['subject'];
        foreach($subject as $value):
            
        endforeach;

?>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <div class="container mt-4">
         <div class="card bg-warning shadow-lg"> 
              <div class="card-header">Result</div> 
              <div class="card-body">
                   <?php foreach($subject as $value): ?>
                      <p><?php  echo $value; ?></p>
                   <?php endforeach; ?>
              </div>
         </div>
           <hr>
           <p><a href="index.php" class="btn btn-danger"> Go Back</a></p>
    </div>
 <?php 
  }
   
  
 
 ?>

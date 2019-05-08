<?php 
     if(isset($_POST["btn-submit"])){
         $username =$_POST['username'];
         $message =$_POST['message'];
        
     }

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <div class="container mt-4">
         <div class="card bg-info">
            <div class="card-header"><?php echo $username; ?></div>
            <div class="card-body">
                 <p><?php  echo $message; ?></p>
            </div>
         </div>
     </div>

<?php 
?>
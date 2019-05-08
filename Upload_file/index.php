<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload fiel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

         <div class="container mt-4">
              <div class="card bg-warning">
                  <div class="card-header text-center">Upload Image</div>
                  <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                         <div class="form-group">
                             <input type="file" name="file" class="form-control-file border">
                         </div>
                         <div class="form-group">
                           <button class="btn btn-primary btn-block" type="submit" name="btn-upload">Upload</button>
                         </div>
                    </form>
                  </div>
              </div>
         </div>
    
</body>
</html>


<?php 
     if(isset($_POST['btn-upload'])){
       $targetDirectory ="uploads/";
       $targetFile = $_FILES['file']['name'];
       $targetUpload = $targetDirectory.$targetFile;
       $targetTempary = $_FILES['file']['tmp_name'];
       move_uploaded_file($targetTempary, $targetUpload);
    
     }
?>
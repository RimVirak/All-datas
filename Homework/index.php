<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework for learning</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
         <div class="card bg-warning">
             <div class="card-header text-center"> Form Data</div>
               <div class="card-body">
                <form action="" method="POST">
                     <div class="form-group" >
                          <input type="text" name="username" placeholder="Useranme" class="form-control">
                     </div>
                     <div class="form-group" >
                          <input type="text" name="email" placeholder="Email" class="form-control">
                     </div>
                    
                     <div class="form-group ">
                           <textarea style="resize: none;" name="message" class="form-control" cols="30" rows="5" placeholder="Message"></textarea>
                     </div>
                     <div class="form-check-inline">
                             <input type="checkbox" name="media[]" class="form-input-check" value="Facebook" checked>Facebook
                     </div> 
                     <div class="form-check-inline">
                             <input type="checkbox" name="media[]" class="form-input-check" value="YouTube">YouTube
                     </div>      
                     <div class="form-check-inline">
                             <input type="checkbox" name="media[]" class="form-input-check" value="Twitter">Twitter
                     </div> 
                     <br><br>
                     <div class="form-group">
                          <select name="teacher" class="form-control">
                             <option value="Teacher">Teacher</option>
                             <option value="Student">Student</option>
                             <option value="Other">Other</option>
                          </select>
                      </div>
                      <div class="form-check-inline ">
                             <input type="radio" name="gender" class="form-check-input" value="Male" checked>Male
                      </div>
                      <div class="form-check-inline ">
                             <input type="radio" name="gender" class="form-check-input" value="Female">Famale
                      </div>
                      <div class="form-check-inline">
                            <input type="radio" name="gender" class="form-check-input" value="Female">Other
                      </div>
                      <br><br>
                      <div class="form-group ">
                            <button class=" btn btn-primary btn-block" type="Submit" name="btn-submit"> Submit</button>
                      </div>
                </form>
             </div>
         </div>
    </div>
   
</body>
</html>


<?php 
     if(isset($_POST["btn-submit"])){
         $username =$_POST['username'];
         $email =$_POST['email'];
         $gender = $_POST['gender'];
         $media = $_POST['media'];
         $teacher =$_POST['teacher'];
         $message =$_POST['message'];
  ?>
      <div class="container shadow-lg mt-4">
        <ul class="list-group">
             <li class="list-group-item"><?php echo $username; ?></li>
             <li class="list-group-item"> <?php echo $email; ?></li>
             <li class="list-group-item"><?php foreach($media as $value):?> <?php echo $value; ?><?php endforeach; ?></li>
             <li class="list-group-item"><?php echo $teacher; ?></li>
             <li class="list-group-item"><?php echo $gender; ?></li>
        </ul>
        <br>
        <div class="card bg-light shadow-lg"> 
              <div class="card-header">Message</div> 
              <div class="card-body">

                      <?php  echo $message; ?>
              </div>
         </div>
         <br>
             <p><a href="index.php" class="btn btn-danger"> Go Back</a></p>
      </div> 
         <br>
  <?php        
     }
?>



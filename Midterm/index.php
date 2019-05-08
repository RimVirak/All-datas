<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Midterm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
        <div class="container mt-4">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="card bg-light shadow-lg">
                            <div class="card-header text-center">Information Form</div>
                            <div class="card-body">
                                <form action="#" method="POST">
                                    <!-- input username -->
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                    </div>
                                    <!-- input email -->
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <!-- Select province -->
                                    <div class="form-group">
                                        <select name="province" class="form-control" required>
                                            <option value="Banteaymeanchey" required>Banteaymeanchey</option>
                                            <option value="Battambang">Battambang</option>
                                            <option value="Preh Vihear">Preh Vihear</option>
                                            <option value="Siem Reap">Siem Reap</option>
                                            <option value="Phnom Penh">Phnom Penh</option>
                                        </select>
                                    </div>
                                    <!-- input phone number -->
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone Number"required>
                                    </div>
                                    <!-- input gender -->
                                    <div class="form-check-inline">
                                        <input type="radio" name="gender" class="form-check-input" value="Male" required>Male
                                    </div>
                                    <div class="form-check-inline">
                                        <input type="radio" name="gender" class="form-check-input" value="Female" required>Female
                                    </div>
                                    <div class="form-check-inline">
                                        <input type="radio" name="gender" class="form-check-input" value="Others" required>Others
                                    </div>
                                    <br>
                                    <br>
                                    <!-- input Status -->
                                    <div class="form-check-inline">
                                        <input type="checkbox" name="personal[]" class="form-check-input" value="Single">Single
                                    </div>
                                    <div class="form-check-inline">
                                        <input type="checkbox" name="personal[]" class="form-check-input" value="Engaged" >Engaged
                                    </div>
                                    <div class="form-check-inline">
                                        <input type="checkbox" name="personal[]" class="form-check-input" value="Married" >Married
                                    </div>
                                    <div class="form-check-inline">
                                        <input type="checkbox" name="personal[]" class="form-check-input" value="Divorced" >Divorced
                                    </div>
                                    <br>
                                    <br>
                                    <!-- Describe what your mind -->
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" cols="30" rows="5" required></textarea>
                                    </div>
                                    <!-- button submit and reset -->
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit" name="btn-submit" required>Submit Infomation</button>
                                        <button class="btn btn-warning float-right" type="reset" name="" required>Cancel Infomation</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>



</body>
</html>
<?php 
     if(isset($_POST["btn-submit"])){
         $username =$_POST['username'];
         $email =$_POST['email'];
         $province = $_POST['province'];
         $phone = $_POST['phone'];
         $gender =$_POST['gender'];
         $personal =$_POST['personal'];
         $message =$_POST['message'];
  ?>
  <div class="container mt-4">
       <div class="card-body">
       <ul class="list-group-sm">
             <li class="list-group-item"><?php echo $username; ?></li>
             <li class="list-group-item"> <?php echo $email; ?></li>
             <li class="list-group-item"> <?php echo $province; ?></li>
             <li class="list-group-item"> <?php echo $phone; ?></li>
             <li class="list-group-item"> <?php echo $gender; ?></li>
             <li class="list-group-item"><?php foreach($personal as $value):?> <?php echo $value; ?><?php endforeach; ?></li>
             <li class="list-group-item"><?php  echo $message; ?>
        </ul>
       </div>
        
         </div>
      </div> 
  <?php        
     }
?>

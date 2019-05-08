<?php
// session start before using session [session start have only one in one document]
 session_start();
 // isset($_SESSION['user']) check if session has created!
 // !empty($_SESSION['user']) check if session has value
 if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
     // redirect to result.php page.
     header("location:result.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
               <div class="card bg-warning shadow-lg">
                    <div class="card-header text-center">Login</div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" name="username" 
                                class="form-control" placeholder="Username">
                            </div>

                             <div class="form-group">
                                <input type="password" name="password" 
                                class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" 
                                type="submit" name="btn-login">Login</button>
                            </div>
                        </form>
                    </div>
               </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

<?php
//!empty($_POST['username']) check if input username are not empty
// !empty($_POST['password']) check if input password are not empty
if(!empty($_POST['username']) && !empty($_POST['password'])) {

    // isset($_POST['btn-login']) check if user click on button
    if(isset($_POST['btn-login'])) {

        // get value from input by name using POST method
        $username = $_POST['username']; // get username value from input
        $password = $_POST['password']; // get password value from input

        // check username value must be (administrator) and password must be (12345)
        if($username == "Virak" && $password == "12345"){

            // store username value in  $_SESSION['user'] variable
            $_SESSION['user'] = $username;

            // redirect to result page.
            header("location:result.php");
        }else {
            // alert message error wrong user information
           ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                    <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error!</strong> Wrong user information
                    </div>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
           <?php
        }
    }
}else {
    // alert message when empty field!
    ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
            <div class="alert alert-danger alert-dismissible ">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong> empty field!
            </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
   <?php
}
?>
</body>
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
</html>
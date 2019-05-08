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
            header("location: result.php");
        }else {
            // alert message error wrong user information
       } ;
    };
  };        
 ?>
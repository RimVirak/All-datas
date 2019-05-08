<?php
   session_start(); 
   if(isset($_POST['btn-login'])){
       $username = $_POST['username'];
       $password = $_POST['password'];

      //store data in session (name and pwd is key of session)  
       $_SESSION['name'] = $username;
       $_SESSION['pwd'] = $password;

      // username if empty
      if($username == ""){
          
           header('Location:index.php');
      }else{
           header('Location:result.php');
           echo $username;

      }
      // if password if empty
      if($password == ""){

            header('Location:index.php');
      }else{
            header('Location:result.php');
            echo $password;
      }
    }
?>
 
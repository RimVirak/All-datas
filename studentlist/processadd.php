<?php 
require_once "connect.php";
     if (isset($_POST['username'] )&& ($_POST['email']) && empty($_POST['province'])){
         echo "Cannot Input";
        
     }else{
         if(isset($_POST['btn-add'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $province = $_POST['province'];

            $query = "INSERT INTO tbl_student (stu_name,stu_email,stu_province)
                 VALUES ('$studentName','$studentemail','$studentprovince')";

                 $result = mysqli_query($connect, $query);
            if ($result){
                echo "Inert success";
            }else{
                echo "Failed!";
            }     
         }
     }

 
?>
<?php 
    include_once "connection.php";
        if (isset($_POST['btn-submit'])){
            $student = $_POST['student'];
            $email = $_POST['email'];
            $province = $_POST['province'];

            $sql = "INSERT INTO tbl_students (stu_name, stu_email, stu_province)
             VALUES('$student','$email','$province')";

            $result = mysqli_query($connection, $sql);

            if ($result){
                header("location:index.php");
            }else{
                echo "cannot insert";
            }
        }
?>
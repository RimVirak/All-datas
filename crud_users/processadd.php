<?php 
    include_once "connectoin.php";
        if (isset($_POST['btn-submit'])){
            $student = $_POST['stduent'];
            $email = $_POST['email'];
            $province = $_POST['province'];
            $gender =$_POST['gerend'];

            $sql = "INSERT INTO tbl_students (stu_name, stu_email, stu_province, stu_gender)
             VALUES('$student','$email','$province','$gender')";

            $result = mysqli_query($con, $sql);

            if ($result){
                header("location:index.php");
            }else{
                echo "cannot insert";
            }
        }
?>
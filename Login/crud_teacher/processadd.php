<?php 
    include_once "connection.php";
        if (isset($_POST['btn-submit'])){
            $teacher = $_POST['teacher'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $gender =$_POST['gender'];

            $sql = "INSERT INTO tbl_teacher (tea_name, tea_email, tea_age, tea_gender)
             VALUES('$teacher','$email','$age','$gender')";

            $result = mysqli_query($connect, $sql);

            if ($result){
                header("location:index.php");
            }else{
                echo "cannot insert";
            }
        }
?>
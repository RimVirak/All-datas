<?php 
    include_once "connection.php";
    if(isset($_POST['btn-update'])){
        $studentName = $_POST ['student'];
        $studentEmail = $_POST ['email'];
        $studentProvince = $_POST ['province'];
        $id = $_POST['id'];
                                              
    }
    $result = "UPDATE tbl_students SET 
    stu_name= '$studentName', 
    stu_email= '$studentEmail',
    stu_province= '$studentProvince'
     WHERE stu_id = '$id'";

    $return = mysqli_query($con,$result);
    if($return){
        header("location:index.php");
    }else{
        echo "Cannot Update";
    }
?>
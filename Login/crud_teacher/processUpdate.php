<?php 
    include_once "connection.php";
    if(isset($_POST['btn-update'])){
        $teacherName = $_POST ['teacher'];
        $teacherEmail = $_POST ['email'];
        $teacherAge = $_POST ['age'];
        $teacherGender = $_POST['gender'];
        $id = $_POST['id'];
                                              
    }
    $result = "UPDATE tbl_teacher SET 
    tea_name= '$teacherName', 
    tea_email= '$teacherEmail',
    tea_age='$teacherAge ',
    tea_gender = '$teacherGender'
     WHERE tea_id = '$id'";

    $return = mysqli_query($connect,$result);
    if($return){
        header("location:index.php");
    }else{
        echo "Cannot Update";
    }
?>
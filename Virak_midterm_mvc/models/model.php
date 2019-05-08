
<?php

 function show_student(){
     include ('connection.php');
    $query="SELECT * FROM tblstudent";
    $show=mysqli_query($con,$query);     
    return $show;

 }
 Add_student();
 function Add_student(){
    include ('connection.php');
    if(isset($_POST['btn-add'])){

        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $gender=$_POST['gender'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $province=$_POST['province'];
        $query="INSERT INTO tblstudent(firstname,lastname,gender,phone,email,province) VALUES ('$firstname','$lastname','$gender','$phone','$email','$province')";
        $result=mysqli_query($con,$query);
        return $result;
    }
}

?>

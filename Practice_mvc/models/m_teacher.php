<?php
 
 function add_teacher(){

    include 'connection.php';
    if(isset($_POST['btn-add'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $query = "INSERT INTO tbl_teacher(name,email, gender) VALUES ('$name','$email','$gender')";
        $result = mysqli_query($dbconnect, $query);
        
        if($result){
            header('location:index.php');   
            }else{
              echo 'you cannot insert';
            }    
     }
}

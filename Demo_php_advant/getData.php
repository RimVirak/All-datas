<?php

include 'connection.php';
include 'src/insertData.php';

if(isset($_POST['btn-add'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $province = $_POST['province'];

    $student = new InsertData($name,$gender,$email,$province);
    // Get value from class oop
    $getName = $student->getName();
    $getGender = $student->getGender();
    $getEmail = $student->getEmail();
    $getProvince = $student->getProvince();

    $query = "INSERT INTO tablestudent('name','gender','email','province')";

    $result = mysqli_query($connect,$query);

    if($result){
        die('Can not insert');
    }else{
        header('Location:header.php');
    }

}



<?php
include 'connection.php';
include 'public/vendor/autoload.php';
use Virak\InsertData;

if(isset($_POST['btn-add'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $province = $_POST['province'];

    $student = new InsertData($name, $gender, $email, $province);
    // get value from CLASS OOP
    $getName = $student->getName();
    $getGender = $student->getGender();
    $getEmail = $student->getEmail();
    $getProvince = $student->getProvince();

    $query = "INSERT INTO tblstudent(name,gender,email,province)
              VALUES('$getName','$getGender','$getEmail','$getProvince')";
    
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die ("Can't insert data into database");
    }else {
        header("location:index.php");
    }
}
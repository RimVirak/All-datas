<?php 
 include_once "connection.php";
   $id = $_GET['id'];
   $query = "DELETE FROM tbl_students WHERE stu_id = $id";
   $result = mysqli_query($con,$query);
   if($result){
       header("location:index.php");
   }else{
       echo "Cannot Delete";
   }
 
?>
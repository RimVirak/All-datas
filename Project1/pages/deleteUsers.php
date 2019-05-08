<?php 
include_once "connection.php";
   $id = $_GET['UserId'];
   $query = "DELETE FROM tbl_user WHERE user_id = $id ";
   $result = mysqli_query($conn,$query);
   if($result){
       header("location:?page=users");
   }else{
       echo "Cannot Delete";
   }
?>
<?php 
 include_once "connection.php";
   $id = $_GET['id'];
   $query = "DELETE FROM tbl_teacher WHERE tea_id = $id";
   $result = mysqli_query($connect,$query);
   if($result){
       header("location:index.php");
   }else{
       echo "Cannot Delete";
   }
 
?>
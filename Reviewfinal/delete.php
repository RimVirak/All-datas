<?php 
   include_once "connection.php";

   $id = $_GET['id'];
   $query = "DELETE FROM  tbl_teacher  WHERE tea_id = ".$id;
   $data = mysqli_query($dbconnect, $query);
   if($data){
       header("location:index.php");
   }else{
       echo "Connot Delete";
   }
 
?>
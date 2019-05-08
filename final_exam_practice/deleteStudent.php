<?php
   
   include_once "dbConnect.php";


   $id = $_GET['id'];
   $query = "DELETE FROM  tbl_student  WHERE stu_id =".$id;
   $data = mysqli_query($dbconnect, $query);
   if($data){
       header("location:index.php");
   }else{
       echo "Connot Delete";
   }

?>
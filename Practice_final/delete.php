<?php
        include_once "connection.php";
        
        $id =$_GET['id'];
        $query = "DELETE FROM tbl_user WHERE user_id= $id";
        $result= mysqli_query($dbconnect,$query);
        if($result){
            header("location:index.php");
        }else{
            echo "You can not delete";
        }

 
?>
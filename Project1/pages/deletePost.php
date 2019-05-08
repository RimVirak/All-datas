<?php 
 include_once "connection.php";
   $id = $_GET['id'];
   $query = "DELETE FROM tbl_blog WHERE blog_id = ".$_GET['postId'];
   $result = mysqli_query($conn,$query);
   if($result){
       header("location:?page=blog");
   }else{
       echo "Cannot Delete";
   }
 
?>

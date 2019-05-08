<?php 
require_once "connection.php";
 if(isset($_POST["btn-post"])){
     $username = $_POST['username'];
     $post = $_POST['post'];

     $query = "INSERT INTO tbl_blog(username,post) VALUES ('$username','$post')";
     $data = mysqli_query($conn,$query);
     if($data){
        header("location:?page=blog");
    }else{
        echo "Cannot Insert";
    }
 }
 ?>
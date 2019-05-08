<?php include_once "connection.php"; 

    $pId = $_GET['postId'];
       $query = "SELECT * FROM tbl_blog WHERE blog_id = '$pId' ";
       $result = mysqli_query($conn,$query);   
       foreach($result as $data):
      
    ?>
    
    <main class="container">
        <div class="card bg-light shadow-lg">
                <div class="card-header text-center"> Update Post</div>
                <div class="card-body">
                    <form action="#" method="post">
                    <input type="hidden" name="postId" value="<?php echo $pId; ?>">
                        <!-- input username -->
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Username"  required value=<?php echo $data['username'] ?> >
                        </div>
                        <textarea class="form-control" name="post"  cols="30" rows="5'" placeholder="Content Post" required  ><?php echo $data['post'] ?></textarea>
                        <div class="form-group">
                        <br>
                            <button class="btn btn-primary" type="submit" name="btn-post">Updatet</button>
                        </div>
                    </form>
                </div>
            </div>
       <?php endforeach; ?>
</main>

<?php 

    if(isset($_POST['btn-post'])){
       $id = $_GET['postId'];
       $username = $_POST['name'];
       $post = $_POST['post'];

       $query = "UPDATE tbl_blog set username ='$username', post='$post' where blog_id ='$id'";
       $result = mysqli_query($conn,$query);

       if($result){
         header("location:?page=blog");
        }else{
         echo "Cannot update";
        }
    }
?>

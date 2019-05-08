
<?php  include_once "connection.php";?>


<main class="container" role="main">
   <a href="?page=addPost" class="mt-4 mb-4 btn btn-primary"> Create News Post</a>
      <?php 
      $query = "select * from tbl_blog order by blog_id desc";
      $result = mysqli_query($conn, $query);
      foreach($result as $data):    
      ?>
      <div class="card">
          <div class="card-body">
              <div class="card-title"><?php  echo $data['username']?></div>
              <p class='card-title'>
               <?php echo $data['post'] ?>

              </p>
              <div class="btn-group float-right">
                  <a href="?page=updatePost&postId=<?php echo $data['blog_id']?>" class="btn btn-primary btn-sm"> Updade</a>
                  <a href="?page=deletePost&postId=<?php echo $data['blog_id']?>" class="btn btn-danger btn-sm"> Delete</a>
              </div>
          </div>
          <div class="card-footer">
              <?php echo $data['post_at'] ?>
          </div>
      </div>
      <br>  
      <?php endforeach; ?>   
</main>


<?php  include_once "connection.php";
 ?>
<main class="container">
<div class="card bg-light shadow-lg">
                <div class="card-header text-center">Create New Post</div>
                <div class="card-body">
                    <form action="?page=insertPost" method="post">
                        <!-- input username -->
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <textarea class="form-control" name="post"  cols="30" rows="5" placeholder="Content Post" required></textarea>
                        <div class="form-group">
                        <br>
                            <button class="btn btn-primary " type="submit" name="btn-post">Create New Post</button>
                            <button class="btn btn-warning float-right" type="reset" name="">Cancel Creation</button>
                        </div>
                    </form>
                </div>
            </div>
</main>
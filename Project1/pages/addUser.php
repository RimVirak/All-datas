<main class="container">
<div class="card bg-light shadow-lg">
                <div class="card-header text-center">Information Form</div>
                <div class="card-body">
                    <form action="#" method="post">
                        <!-- input username -->
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="position" class="form-control" placeholder="Position" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" class="form-control" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <input type="number" name="age" class="form-control" placeholder="Age" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="btn-user">Submit Infomation</button>
                            <button class="btn btn-warning float-right" type="reset" name="">Cancel Infomation</button>
                        </div>
                    </form>
                </div>
            </div>
            
</main>

<?php 
   include_once "connection.php";
            if(isset($_POST['btn-user'])){
                $username = $_POST['username'];
                $position = $_POST['position'];
                $city = $_POST['city'];
                $age = $_POST['age'];

        $query = "INSERT INTO tbl_user (username,city,position,age) VALUES ('$username','$city','$position','$age')";
        $result = mysqli_query($conn,$query);
          if($result){
             header("location:?page=users");
         }else{
            echo "Cannot Inset";
        }
    }
?>
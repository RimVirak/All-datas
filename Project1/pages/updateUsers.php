<?php 
    include_once "connection.php";

    $id = $_GET['UserId'];
    $sql = "SELECT * FROM tbl_user WHERE user_id = $id ";
    $result = mysqli_query($conn, $sql);
     foreach($result as $value): 
      
    ?> 
    ​<main class="container">
​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​            <div class="card bg-light shadow-lg">
                <div class="card-header text-center"> Update Information</div>
                <div class="card-body">
                    <form action="#" method="POST">
                   
                        <! input username -->
                        <!-- <input type="hidden" name="id" value="?php echo $value['UserId']; ?>"> -->
                        <div class="form-group" >
                            <input type="text" name="name" class="form-control" placeholder="Username" required value="<?php echo $value['username']; ?> ">
                        </div>
                        <div class="form-group">
                            <input type="text" name="position" class="form-control" placeholder="Position" required value="<?php echo $value['position']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" class="form-control" placeholder="City" required value="<?php echo $value['city']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="number" name="age" class="form-control" placeholder="Age" required value="<?php echo $value['age']; ?>">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="btn-update"> Update </button>
                        </div>
              
                    </form>
                </div>
            </div> 
 </main>

    <?php

        endforeach;
          if (isset($_POST['btn-update'])) {

            $name = $_POST['name'];
            $position = $_POST['position'];
            $city = $_POST['city'];
            $age = $_POST['age'];
    
            $query = "UPDATE tbl_user SET 
            username = '$name', position = '$position', 
            city = '$city', age = '$age' 
            WHERE user_id  =".$_GET['UserId'];
    
            $show = mysqli_query($conn, $query);
            if ($show) {
                header("location:?page=users");
            } else {
                echo "Can not update!";
            }
    
        }
    ?>
<main class="container">
<div class="card bg-dark shadow-lg">
                <div class="card-header text-center">Information Form</div>
                <div class="card-body">
                <form action="index.php?action=update_info" method="post">
                   
                    <?php
                        foreach($data['$data_update'] as $row){
                    ?>
                            <input type="hidden" name="id" value="<?php echo $row['id']?>"> 
                        <!-- input username -->
                        <div class="form-group">
                            <input type="text" name="firstname" class="form-control" placeholder="Firstname" required value="<?php echo $row['firstname']?>"> 
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastname" class="form-control" placeholder="Lastname" required value="<?php echo $row['lastname']?>">
                        </div>
                        
                        <div class="form-group">
                            <input type="number" name="age" class="form-control" placeholder="Age" required value="<?php echo $row['age']?>">
                        </div>
            
                        <div class="form-group">
                            <input type="number" name="salary" class="form-control" placeholder="Salary" required value="<?php echo $row['salary']?>" >
                        </div>
                     
                            <button class="btn btn-primary" type="submit" name="btn-update">Update </button>
                            <button class="btn btn-danger float-right" type="reset" name="">Cancel </button>
                            <!-- <a href="view.php" class="btn btn-info">Back</a> -->
                        </div>
                    </form>
                    <?php
                     }
                    ?>
                </div>
            </div> 
</main>
<!-- <script>
   
   ?php
       require_once "connection.php";
       
       if(isset($_POST['btn-user'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];

        $query = "UPDATE employee SET firstname='$firstname', lastname='$lastname', age='$age', salary='$salary' WHERE id =".$id;
        $result = mysqli_query($dbconnect, $query);
        
       if($result){
           header("location:index.php");
       }else{
           header("location:add.php");
       }
   }
   
   ?>
</script> -->
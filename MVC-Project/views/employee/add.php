

<main class="container">
<div class="card bg-dark shadow-lg">
                <div class="card-header text-center">Information Form</div>
                <div class="card-body">
                    <form method="post" action="#">
                        <!-- input username -->
                        <div class="form-group">
                            <input type="text" name="firstname" class="form-control" placeholder="Firstname" required value> 
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastname" class="form-control" placeholder="Lastname" required value>
                        </div>
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Title" required value>
                        </div>
                        <div class="form-group">
                            <input type="number" name="age" class="form-control" placeholder="Age" required value>
                        </div>

                        <div class="form-group">
                            <input type="number" name="yearofservice" class="form-control" placeholder="Yearofservice" required value>
                        </div>
                        
                        <div class="form-group">
                            <input type="number" name="salary" class="form-control" placeholder="Salary" required value>
                        </div>
            
                        <div class="form-group">
                            <input type="number" name="perks" class="form-control" placeholder="Perks" required value>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email" required value>
                        </div>
                
                            <button class="btn btn-primary" type="submit" name="btn-user"> Add </button>
                            <button class="btn btn-danger float-right" type="reset" name=""> Cancel </button>
                            <a href="view.php" class="btn btn-info">Back</a>
                        </div>
                    </form>
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

        $query = "INSERT INTO employee(firstname,lastname, age, salary) VALUES ('$firstname','$lastname','$age','$salary')";
        $result = mysqli_query($dbconnect, $query);
        
       if($result){
           header("location:index.php");
       }else{
           header("location:add.php");
       }
   }
   
   ?>
</script> -->
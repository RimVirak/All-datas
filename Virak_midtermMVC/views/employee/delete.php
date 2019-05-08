<!-- ?php
         if(isset($_POST['btn-delete'])) {
            $firstname = 'localhost:3036';
            $lastname = 'root';
            $age = 'rootpassword';
            $title = 'rootpassword';
            $yearofservice = 'rootpassword';
            $salary = 'rootpassword';
            $yearofservice = 'rootpassword';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $emp_id = $_POST['emp_id'];
            
            $sql = "DELETE FROM employee WHERE emp_id = $emp_id" ;
         }else{

         } -->
          <!-- ?php
       require_once "connection.php";
       
        $id = $_GET['id'];
        $query = "DELETE FROM employee WHERE id =".$id;
        $result = mysqli_query($dbconnect, $query);
        
       if($result){
           header("location:index.php");
       }else{
           header("location:add.php");
       }
   
   ?> -->

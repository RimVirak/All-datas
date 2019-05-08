<?php

   function m_get_data(){
       $query = "select*from employee";
       include 'connection.php';
       $result = mysqli_query($dbconnect, $query);
       $rows = [];
       if(mysqli_num_rows($result) > 0){
           while ($get_result_to_array = mysqli_fetch_array($result, MYSQLI_ASSOC)){
               $rows[]= $get_result_to_array;
           }   
       }
        return $rows;
        // var_dump($rows);
    }

    function m_add_data(){

        include 'connection.php';
        if(isset($_POST['btn-user'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $age = $_POST['age'];
            $salary = $_POST['salary'];
            $query = "INSERT INTO employee(firstname,lastname, age, salary) VALUES ('$firstname','$lastname','$age','$salary')";
            $result = mysqli_query($dbconnect, $query);
            
            if($result){
                header('location:index.php');   
                }else{
                  echo 'you cannot insert';
                }    
    }
   
}
// var_dump($result);
      
    function m_delete_employee(){
        include 'connection.php';
        $id = $_GET['id'];

        $query = "DELETE FROM employee WHERE id = '$id'";
        $result = mysqli_query($dbconnect, $query);
        return $result;
        
    }

    function getupdateinfo_employee() {
        include "connection.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM employee WHERE id ='$id'";
        $data = mysqli_query($dbconnect, $query);
        return $data;
    }

    function m_update_employee(){
        include "connection.php";
       
        if(isset($_POST['btn-update'])){
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $age = $_POST['age'];
         $salary = $_POST['salary'];
         $id = $_POST['id'];

         $query = "UPDATE employee SET firstname='$firstname', lastname='$lastname', age='$age', salary='$salary' WHERE id =".$id;
         $result = mysqli_query($dbconnect, $query);
         return $result;

        //  if($result){
        //     header("location:index.php");
        // }else{
        //     header("location:add.php");
        // }
    }
}

    



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
        // session_start();
        include 'connection.php';
        if(isset($_POST['btn-user'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $title  = $_POST['title'];
            $age  = $_POST['age'];
            $yearofservice = $_POST['yearofservice'];
            $salary  = $_POST['salary'];
            $perks  = $_POST['perks'];
            $email = $_POST['email'];
            $query = "INSERT INTO employee(firstname,lastname,title, age,yearofservice,salary,perks,email) 
                      VALUES ('$firstname','$lastname','$title','$age','$yearofservice','$salary','$perks','$email')";
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
        // var_dump($data);die();
        return $data;
    }

    function m_update_employee(){
        include "connection.php";
        $id = $_POST['id'];
       
        // if(isset($_POST['btn-update'])){
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $title  = $_POST['title'];
         $age  = $_POST['age'];
         $yearofservice = $_POST['yearofservice'];
         $salary  = $_POST['salary'];
         $perks  = $_POST['perks'];
         $email = $_POST['email'];

         $query = "UPDATE employee SET firstname='$firstname', lastname='$lastname', title='$title', age=$age,
                   yearofservice= $yearofservice, salary=$salary, perks=$perks, email ='$email' WHERE id ='$id'";
         $result = mysqli_query($dbconnect, $query);
         return $result;

         if($result){
            header("location:index.php");
        }else{
            header("location:add.php");
        }


        // include 'connection.php';
        // $id = $_GET['id'];
        // $query = " UPDATE employee SET";
        // foreach ($data as $field =>$value){
        //     $query .= "$field ='$value',";

        // }
      
        // $query = substr($query, 0,-1);
        // $query .= " WHERE id ='$id'";
        // var_dump($query);die();
        // $result = mysqli_query($dbconnect,$query);
        // return $result;
        
    }

   function getall_detail(){
        

 }

 function loginvalidation(){
   
    include "connection.php";
    
    if(isset($_POST['but_submit'])){
    
        $uname = mysqli_real_escape_string($dbconnect,$_POST['txt_uname']);
        $password = mysqli_real_escape_string($dbconnect,$_POST['txt_pwd']);
    
        if ($uname != "" && $password != ""){
    
            $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
            $result = mysqli_query($dbconnect,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['cntUser'];
    
            if($count > 0){
                $_SESSION['uname'] = $uname;
                header('Location: index.php?action=view');
            }else{
               header('Location: index.php?action=login');
            }
    
        }
    
    }

 }  



function userRegister(){
    include "connection.php";
        // $id = $_POST['id'];
        
        $fname = $_POST['username'];
        $nname= $_POST['name'];
        $pwd = $_POST["pwd"];
        $query = "INSERT INTO user (username,name,password) VALUES ('$fname','$nname','$pwd')";
        $result = mysqli_query($dbconnect, $query);
    
            if($result){
                header( 'location:index.php');
            }else{
                echo 'Cannot Registers';
            }

        return $result;  
}



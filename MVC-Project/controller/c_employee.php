<?php
    $data = array();
    flexible_function($data);

    function flexible_function(&$data){
        $function ='login';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function=$action;
        }
        $function($data);
    }

     function login(&$data){
        $data ['page'] = 'login';
     }
     function loginvalidate(&$data){
         validateFromDb();
     }
     
     function logout(&$data){
    
        // Check user login or not
        if(!isset($_SESSION['uname'])){
            session_destroy();
            header('Location: index.php?action=login');
          }
    }
    
      function view(&$data){
          $data['employee_data'] = m_get_data();
          $data['page'] = "employee/view";
    }

      function add(&$data){
      $data['$data_add'] = m_add_data();
      $data['page'] = "employee/add";
      
    }

    function delete(&$data){
        $data_delete = m_delete_employee();
        if($data_delete){
            header('location:index.php');
        }else{
            echo 'you cannot delete';
        }
    }

    function update(&$data){
        $data['$data_update'] = getupdateinfo_employee();
        $data['page'] = "employee/update";

    }

    function update_info(&$data) {
        $data_update= m_update_employee();
        $data['page'] = "employee/update";
         if($data_update){
            header('location:index.php?action=view');
        }else{
            echo 'you cannot update';
        }
    }
    
    function viewdetail(&$data){
        $data['$data_view'] = getall_detail();
        $data['page'] = "employee/viewdetail";  
    }

    function createUser(&$data){

         $data['page'] = 'register';
     }

     function usersRegister(&$data){
         $user  = userRegister();
         if($user){
            $action = 'view';
        }else{
            $action = 'register';
        }
    header("Location:index.php?action=$action");
    }
  
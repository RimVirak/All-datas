<?php
    $data = array();
    flexible_function($data);

    function flexible_function(&$data){
        $function ='view';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function=$action;
        }
        echo  $function($data);
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
    ?>
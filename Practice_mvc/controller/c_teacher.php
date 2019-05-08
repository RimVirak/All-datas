<?php
    $data = array();
    flexible_function($data);

    function flexible_function(&$data){
        $function ='view';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function=$action;
        }
        $function($data);
    }

    function add(&$data){
        $data_add = add_teacher();
        $data['page'] = 'teacher/add';

    }
   function view(&$data){
       $data['page'] = 'teacher/view';
   }
   function edit(&$data){
    $data['page'] = 'teacher/edit';
}
function delete(&$data){
    $data['page'] = 'teacher/delete';
}
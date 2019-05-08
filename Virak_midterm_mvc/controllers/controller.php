
<?php

 function show(){
    $result= show_student();
    return   $result;
 }
 function add(){
      $result=Add_student();
    if(!$result){
       header('location:index.php');
    }else  {
        echo "error";
   }
 }
?>

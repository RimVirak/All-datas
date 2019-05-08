<?php

  $connect = mysqli_connect('localhost','root','','demo_php_advante');
  if(!$connect){
      die('Can not connect database');
  }else{
      echo ('Connected');
  }

?>
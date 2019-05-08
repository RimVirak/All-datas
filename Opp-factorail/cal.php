<?php
  
  require_once "src/Calculate.php";

  if(isset($_POST['btn-cal'])){
      $inputvalue = $_POST['factorail'];

  if($inputvalue < 0){
      echo " Cannot Calculate";
  }else{
      $first = new Calculate($inputvalue);
      echo 'Result of '.$first->getInput()." is : ".$first->calculation();
  }
}
?>
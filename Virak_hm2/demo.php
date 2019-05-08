<?php
include_once "loan.php";
class Demo extends Loan{



}
$demo=new Demo("MR.Vivord",10000,1);
echo $demo->getter();
?>
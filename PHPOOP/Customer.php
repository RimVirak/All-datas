<?php

class Customer{
    private $first_name, $last_name;

    public function setData($first_name, $last_name){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function printData(){
        echo $this->first_name . " : ". $this->last_name;
    }
}

$cus1 = new Customer;
   $cus1->setData("Virak", "RIM");
   $cus1->printData();
   echo("<br>");
$cus2 = new Customer;
   $cus2->setData("Phanna", "Choung");
   $cus2->printData();
   echo ("<hr>");
   
   $cus1 = new Customer;
   $cus1->setData("Virak", "RIM");
   $cus1->printData();
   echo("<br>");
$cus2 = new Customer;
   $cus2->setData("Phanna", "Choung");
   $cus2->printData();

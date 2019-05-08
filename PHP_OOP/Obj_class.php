<?php
   class Customer{
    private $first_name, $last_name, $age;

    public function __construct(){
        $first_name = '';
        $first_last = '';
        $age = 0;

    }
    public function setName($first_name, $last_name,$age){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age; 
    }

    public function getName(){
        echo " Name : " .$this->first_name . " " . $this->last_name . "</br>";
        echo " Age : " .$this->age ."</br>";
       
    }
}
$customer = new Customer;
   $customer->setName("Virak", "RIM", 21);
   $customer->getName();

?>

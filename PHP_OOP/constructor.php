<?php
   class Customer{
    private $first_name, $last_name, $age;

    public function __construct($first_name, $last_name, $age){
        $this->setName($first_name, $last_name, $age);

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
$customer = new Customer (" Virak ", " RIM ", 21);
   $customer->getName();

?>

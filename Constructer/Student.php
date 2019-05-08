<?php

   class Student{
       //member variable
       private $mName;
       private $mAge;

       public function __construct1($name){
          $this->mName = $name;
       }
       public function __construct2($name,$age){
          $this->mName = $name;
          $this->mAge = $age;
       }
       // public function
       public function getName(){
           return $this->mName;
       }
       public function getNameAndAge(){
           return $this->mName." ".$this->mAge;
           
       }
   }

   $student1 = new Student ('Sophanna',12);
   echo $student1->getNameAndAge();
  
?>
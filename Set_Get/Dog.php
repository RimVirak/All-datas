<?php
include_once "Animal.php";
   class Dog extends Animal{

       public function hello(){
            return "dog";
        }
   }

   $SmallDog = new Dog();

   $SmallDog->setName("Srey EM");
   echo "<br>";
   echo $SmallDog->getName();
   $SmallDog->setColor("Srey Em Black girl");
   echo "<br>";
   echo $SmallDog->getColor();


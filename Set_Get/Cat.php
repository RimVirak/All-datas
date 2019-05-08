<?php
    include_once "Animal.php";
    class Cat extends Animal{
 
        public function Cry(){
             return "Mav Mav";
         }
    }
    $Newcat = new Cat();

    $Newcat->setName("Srey EM");
    echo "<br>";
    echo $Newcat->getName();
    $Newcat->setColor("Srey Em cry Mav Mav");
    echo "<br>";
    echo $Newcat->getColor();
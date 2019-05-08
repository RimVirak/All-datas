<?php
    class Student{
        private $name;
 // mutator method or setter method
        public function setName($name){
            if(trim($name) !=" 22333 "){
                $this->name = $name;
                return true;
            }else{
                return false;
            }
        }
        // accessor method or getter method
        public function getName(){
            return $this->name;
        }
    }

    $c1 = new Student();
    $c1 -> setName("Virak RIM");
    echo $c1->getName();
?>
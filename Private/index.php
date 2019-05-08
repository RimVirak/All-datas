<?php
     
    class Student{

        private $name;
        
        public function setname($name){
            $this->name=$name;
        }

        public function getname($name){
            $this->name=$name;
        }
    }

    $stu = new Student();
    $stu -> setname("Passernumeriques Cambodia");
    echo $stu->getname();
 
?>
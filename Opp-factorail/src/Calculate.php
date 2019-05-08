<?php

   class Calculate {
       public $value;
       public $result;

       public function __construct($value){
           $this->value = $value;
       }

       public function getInput(){
           return $this->value;
       }

       public function calculation(){
           $resultFactorail = 1;
           for($i=1; $i<=$this->getInput(); $i++){
                $resultFactorail *= $i;
           }
           return $resultFactorail;
       }
   }

 
?>
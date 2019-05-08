<?php

   class Customer{
       
   public $URL;

   public function __construct($baseurl){
        $this->URL=$baseurl;
   }
   public function geturl(){
        return $this->URL;
   }
}
   $c1 = new Customer('http://location/myproject');

     echo "<h1>" .$c1->geturl() ."</h1>"; 
     // echo "<h1>" .$_SERVER['SCRIPT_FILENAME']."</h1>"; 
?>
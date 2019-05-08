<?php
  
  class Product{

    public $product_name;

    public function setName($product_name){
        $this->product_name = $product_name;

    }

    public  function getName(){
         return $this->product_name;
    } 

  }

$pro = new Product();
$pro =setName("Lab Top");
echo $pro->getName();

echo "<br>". $pro->product_name = "Desk Top";

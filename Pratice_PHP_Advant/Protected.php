<?php
//practice private
class Customer{
protected $name;

public function setName($name){
$this->name = $name;
}
public function getName(){
return $this->name;
}
}
class Discount extends Customer{
private $discount;
public function setData($name,$discount){
$this->name = $name;
$this->discount = $discount;

} 
public function getData(){
return "The product is: ".$this->name .".</br> has discount:: ".$this->discount."%</b>";
} 
}
$dis = new Discount();
$dis->setData("Cambodia",50);
echo $dis->getData();

<?php
class Animal{
   private $mName;
   private $mColor;

   //ste value name
   public function setName($name){
           $this->mName=$name;
   }
   // set value color
   public function setColor($color){
           $this->mColor=$color;
   } 
    

   public function getName(){
       return $this->mName;
   }

   public function getColor(){
       return $this->mColor;
  }

  

}
$dog = new Animal();
$dog->setName('KIKI');
echo $dog->getName();
 
echo "<br>";
$dog->setColor('Black');
echo $dog->getColor();
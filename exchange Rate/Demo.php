<?php
include_once "Arrea.php";
class Demo implements Area{ 
  public function SquareArea($conrner){
         return "Square area ".$conrner*$conrner;
  }
public function RectangularArea($long,$width){
    return "Rectangular area ".($long*$width);

}
public function CircleArea($R){
 return "Circle area ".($R*$R*3.14);
}

}

$demo=new Demo();
echo $demo->SquareArea(10)."</br>";
echo $demo->RectangularArea(10,20)."</br>";
echo $demo->CircleArea(20);


?>
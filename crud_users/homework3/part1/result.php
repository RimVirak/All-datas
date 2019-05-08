

<?php

include "Icalculator.php";
class result implements Icalculator{

    public function squareArea($corner){
        $squareArea=$corner*$corner;
        return $squareArea;
    }
    public function rectangularArea($long,$width){
        $rectangularArea=$long*$width;
        return $rectangularArea;
    }
    public function circleArea($R){
        $circleArea= pow($R,2)*3.14;
        return $circleArea;
    }
   

}
$result =new result();

echo "Square Area :".$result->squareArea(200)."</br>";
echo "Rectangular Area: ".$result->rectangularArea(300,400)."</br>";
echo "Circle Area: ".$result->circleArea(3);


?>
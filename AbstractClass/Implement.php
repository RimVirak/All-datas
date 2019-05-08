<?php


include "Metholder.php";

class Implement implements Metholder{

      public function getInfo($info){
          echo "This is NEWS!".$info."</br>";
      }

      public function sendInfo($info){
          return $info;

      }

      public function calculate($first,$second){
          $calculate = $first+$second;
          return $calculate;
      }

      public function useMethods(){
          $this->getInfo("Today you win 1000000000$");
          echo $this->sendInfo("Man UTD change coach")."<br>";
          echo "You make $". $this->calculate(90,120)."In your part-time job <br>";
      }
}

$worker = new Implement();
$worker->useMethods();

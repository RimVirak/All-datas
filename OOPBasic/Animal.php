<?php 
    class Animal{
        public $name="Pharim Kiki";
        public $color="Black";
        public $typeOfAnimal;

        public function run(){
            return "Run fast";
        }
        public function eat($food){
            return $food;
        }
        public function shout($shout,$cry){
            return $shout." ".$cry;
        }
        
    }//end class

      $dog = new Animal();
      echo $dog->name;
      echo "<br>";
      echo $dog->color;
      echo "<br>";
      echo $dog->typeOfAnimal="សត្វជើង​៤";
      echo "<br>";
      echo $dog->run();
      echo "<br>";
      echo $dog->eat("Rice");
      echo "<br>";
      echo $dog->shout("Wohh Wohh","Ho Ho");

?>
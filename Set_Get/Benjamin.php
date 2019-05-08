<?php
include_once "Teacher.php";
class Benjamin extends Teacher{
      private $mNational;

      public function setNational($national){
            $this->mNational=$national;
      }
      public function getNational(){
           return $this->mNational;
    }
    
}
echo "<hr>";
$Ben = new Benjamin();
   $Ben->setName('Benjamin');
   echo $Ben->getName();

   echo '<br>';
   $Ben->setPosition('KorNater');
   echo $Ben->getPosition();

   echo '<br>';
   $Ben->setAge('39');
   echo $Ben->getAge();

   echo '<br>';
   $Ben->setNational('English');
   echo $Ben->getNational();


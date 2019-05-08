<?php

   class Teacher{
       private $mName;
       private $mPosition;
       private $mAge;
       private $mProvince;
      
// public function setInfo($name, $age, $position, $province){
  // we can do like this it good as well
       //set not return 
       public function setName($name){
           $this->mName=$name;
       }
       public function setPosition($position){
           $this->mPosition=$position;
       }
       public function setAge($age){
           $this->mAge=$age;
       }
       public function setProvince($province){
            $this->mProvince=$province;
       }
      // get have return
       public function getName(){
            return $this->mName;//get value of name
       }
       public function getPosition(){
            return $this->mPosition;//get the value of position
       }
       public function getAge(){
             return $this->mAge;//get the value of age
       }
       public function getProvince(){
              return $this->mProvince;//get the value of province
      }

   }
   $teacher = new Teacher();
   $teacher->setName('Rady');
   echo $teacher->getName();
    
   echo "<br>";
   $teacher->setPosition('WEB_Trinner');
   echo $teacher->getPosition();

   echo "<br>";
   $teacher->setAge('23');
   echo $teacher->getAge();

   echo "<br>";
   $teacher->setProvince('BMC');
   echo $teacher->getProvince();


<?php


class InsertData{

   private $name;
   private $gender;
   private $email;
   private $province;

   public function __construct($name,$gender,$email,$province){
       $this->name = $name;
       $this->gender = $gender;
       $this->email = $email;
       $this->province = $province;
   }

   public function getName(){
       return $this->name;
   }
   public function getGender(){
    return $this->gender;
   }

   public function getEmail(){
    return $this->email;
  }
   public function getProvince(){
       return $this->province;
   }
}

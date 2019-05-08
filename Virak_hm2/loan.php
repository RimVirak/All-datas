<?php
class Loan{
  protected $name;
  protected $borrow;
  protected $duration;
//   protected $payBack;
public  function Loan($name,$borrow,$duration){
          $this->name=$name;
          $this->duration=$duration;
          $this->borrow=$borrow;

  }
  public  function getter(){
      $payBack=($this->borrow*0.1*$this->duration);
    //   $capital=$payBack+$this->borrow;
      return $this->name." must pay interest ".$payBack."$ for duration ".($this->duration*365)." days with capital ".$this->borrow."$";

  }
}



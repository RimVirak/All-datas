<?php
class Exchange{
    public $exchange;
    public function Exchange($riel){
         $this->exchange=$riel;
    }
 
    public function getExchange(){
        return "Your money exchange is ".$this->exchange." and exchange to dollar is ".($this->exchange/4000)."$";
    }

}

$ex=new Exchange(1200000);
echo $ex->getExchange();

?>
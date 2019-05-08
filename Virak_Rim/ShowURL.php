<?php

   class ShowURL{
       
   public $URL;

   public function __construct($BasURL){
        $this->URL=$BasURL;
   }
   public function geturl(){
        return $this->URL;
   }
}
   $newURL = new ShowURL('My Project URL is: http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
       echo "<h1>" .$newURL->geturl() ."</h1>"; 
?>
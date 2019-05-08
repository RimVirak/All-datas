<?php 
 if (isset($_GET["page"])){
     $page = $_GET['page'];
     $pageFile = "pages/".$page.".php";
     
     if(file_exists($pageFile)){
         include_once "$pageFile";
     }else{
         include_once "pages/users.php";
     }
     }
?>
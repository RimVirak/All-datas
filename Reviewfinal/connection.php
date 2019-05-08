<?php
$dbconnect = mysqli_connect("localhost","root","","tbl_teacher");

if(!$dbconnect){
 echo ('cannot connect');

}else{
    echo ('connceted');
}
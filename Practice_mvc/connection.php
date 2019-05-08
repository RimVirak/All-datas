<?php

$dbconnect = mysqli_connect("localhost","root","","practice_mvc");

if(!$dbconnect){
 die ('cannot connect');

}else{
    echo ('connceted');
}

<?php
$dbconnect = mysqli_connect("localhost","root","","virak_midterm");

if(!$dbconnect){
 echo ('cannot connect');

}else{
    echo ('connceted');
}
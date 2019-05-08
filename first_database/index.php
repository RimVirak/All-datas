<?php 
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbName = "first_database";

    $connection = mysqli_connect($serverName, $username, $password, $dbName);

    if(!$connection){
        die("can not connect");
    }

    echo "connection successfuly";

?>
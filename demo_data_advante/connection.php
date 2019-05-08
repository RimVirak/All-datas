<?php

$connection = mysqli_connect('localhost','root', '', 'demo_oop');

if(!$connection) {
    die("Can't connect to ddatabase");
}
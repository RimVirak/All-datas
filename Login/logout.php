<?php
// start session
session_start();
// delete or destroy session 
session_destroy();
// redirect to form login
header("location:index.php");
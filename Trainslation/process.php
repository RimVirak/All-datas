

<?php
    session_start();
    if(isset($_GET['lang'])){
        $lang = $_GET['lang'];
        $_SESSION['language'] = $lang;   
    }else if($_SESSION['language']){
        $lang = $_SESSION['language'];
    }else {
        $lang = "en";
    }
    switch($lang){
        case "en":
        $langFile = "english.php";
        break;
        case "kh":
        $langFile = "khmer.php";
        break;
        default:
        $langFile = "english.php";
        break;
    }
    include_once "$langFile";
?>
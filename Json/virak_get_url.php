<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>List of students</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="List of all students">
    <meta name="author" content="Laura Hennequin">
    
    <h1> List of students </h1>
    <p>This list has been generated from <a href="http://kratie.pnc.lan/laura.hennequin/ssl/web.service/all_students_json.php">this web service</a>.
    
</head>
<body>
</html>
	
    <?php
	       $url = "http://kratie.pnc.lan/laura.hennequin/ssl/web.service/all_students_json.php";
	       $data = file_get_contents($url);
	       $datas=  json_decode($data,true);
	?><ul>
    <?php
	foreach($datas as $result){

	?>
	<li><?php echo ucwords(strtolower( $result['name']))." come from ".$result['city'];?></li>			
	
	<?php  };?>
	</ul>

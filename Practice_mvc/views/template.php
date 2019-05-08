<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
    <script src="views/jquery-1.9.1.js" ></script>
    <script src="views/list.js" ></script>
    <script src="views/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <link href="views/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="views/style.css" rel="stylesheet" type="text/css" media="all">

</head>
<body data-gr-c-s-loaded="true">
    <div class="container">
             <legend class="header">
                <h3 class="pull">Employee Manager</h3>
             </legend>
             

         <?php
            include "views/" . $data['page'] . ".php";
            // include "views/teacher/view.php";
            // include "views/teacher/add.php";
            
         ?> 
     </div> 
    
</body>
</html>
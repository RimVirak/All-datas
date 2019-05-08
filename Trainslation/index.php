
<?php  require_once "process.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php  echo $language['title'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>

   <div class="container mt-4">
          <div class="card bg-warning shadow-lg">
                <div class="card-header "><?php  echo $language['user_info'] ?></div>
                <div class="card-body">
                    <p><?php  echo $language['text'] ?></p>
                    <a href="?lang =en" class="card-link btn btn-primary"><?php  echo $language['btn-en'] ?></a>
                    <a href="?lang =kh" class="card-link btn btn-info"><?php  echo $language['btn-kh'] ?></a>
                </div>
          </div>  
   </div>   
</body>
</html>
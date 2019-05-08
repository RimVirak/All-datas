

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
@include('inc.navbar')
@yield('content')
<?php
$post = \App\post::all();
foreach ($post as$value):
    # code...

?>
<h1> <?php echo $value['body']?></h1>
<?php endforeach;?>
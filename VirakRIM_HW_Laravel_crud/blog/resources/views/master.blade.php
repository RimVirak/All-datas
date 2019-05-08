<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
     
    <div class="bg-secondary text-white p-5">
         <a href="{{route('posts.index')}}" class='btn btn-info'>Home</a>
         <a href="{{route('posts.create')}}" class='btn btn-info'>Create Post</a>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="bg-dark text-center text-white p-4">
           All right reserved VirakRim {{'02/23/2019'}}
    </div>
</body>
</html>
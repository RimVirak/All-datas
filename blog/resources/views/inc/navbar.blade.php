
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Customer</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>{{config('app.name')}}</title>

</head>
<body>
    <nav class="nav-wapper teal">
    <div class="container">
        <a href="#" class="brand-logo">Khmer Food</a>
        <a href="#" class="sidenav-trigger" data-target="mobile-menu">
            <i class="material-icons">menu</i>

        </a>
        <ul class="right hide-on-med-and-down">
            <li class="nav-link">
                <a href="#">{{config('app.name')}}</a>
            </li>
            <li><a href="home">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="servicess">Service</a></li>
            <li><a href="#" class="btn-floating red z-depth-0 pulse">
                    <i class="material-icons white-text">person</i>
                </a></li>
        </ul>
    </div>
</nav>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(function () {
        $('.sidenav').sidenav();
    });

</script>
</body>
</html>
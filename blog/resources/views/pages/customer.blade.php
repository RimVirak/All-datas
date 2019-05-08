

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Customer</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    <nav class="nav-wapper teal">
    <div class="container">
        <a href="#" class="brand-logo">Khmer Food</a>
        <a href="#" class="sidenav-trigger" data-target="mobile-menu">
            <i class="material-icons">menu</i>

        </a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#" class="btn-floating red z-depth-0 pulse">
                    <i class="material-icons white-text">person</i>
                </a></li>
        </ul>
    </div>
</nav>
<br><br><br>

<div class="container mt-4">
    <table class="table table-striped table-bordered">
    
        <h2>This is customer list page </h2>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Province</th>
        </tr>
        @foreach ($data as $item)
          <tr>
            @foreach ($item as $information)
            <td>{{$information}}</td>
            @endforeach
          </tr>
        @endforeach
      
      </table>
</div>
  

<footer class=" page-footer pink">
    <div class="container">
        <div class="row">
            <div class=" col s12 m4 l4 xl4">
                <p class="btn-floating pink darken-3"><i class="material-icons">phone</i></p>0884669216
            </div>
            <div class=" col s12 m4 l4 xl4">
                <p class="btn-floating pink darken-3"><i class="material-icons">account_balance</i></p>PNC
            </div>
            <div class=" col s12 m4 l4 xl4">
                <p>
                     <a href="#" class="btn pink darken-3">Facebook</a>
                     <a href="#" class="btn pink darken-3">Twitter</a>
                </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <p class="center-align"> &copy; Copy Right By Virak</p>
        </div>
    </div>
</footer>


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
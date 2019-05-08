<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset(css/app.css)}}" rel="stylesheet">
    <title>{{config('app.name')}}</title>
</head>
<body>
<nav class="nav-wrapper orange">
        <div class="container">
            <a href="#" class="brand-logo">Healthy</a>
            <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                <i class="material-icons">menu</i>
            </a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#" class="btn-floating white z-depth-0 pulse">
                    <i class="material-icons orange-text">notifications</i>
                </a>
            </li>
            <li><a href="#" class="btn-floating white z-depth-0 pulse">
                    <i class="material-icons orange-text">phone</i>
                </a>
            </li>
            <li><a href="#" class="btn-floating white z-depth-0 ">
                    <i class="material-icons orange-text">person</i>
                </a>
            </li>
        </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Service</a></li>
            
    </ul>


    <div class="container">
        <h1 class="center hide-on-med-and-down">Online Healthy</h1>
        <div class="row">
            <div class="col s12 m6 l6 xl6">
                    <div class="card">
                        <div class="card-image">
                            <img src="images.jpg" alt="Fruit">
                            <a href="#" class="halfway-fab btn-floating red pulse">
                                <i class="material-icons ">favorite</i>
                            </a>
                        </div>
                            <div class="card-content">
                                <h2 class="card-title">Food Health</h2>
                                <p>Fruit is best food for People and animal</p>
                            </div>
                            <div class="card-action">
                                <a href="#" class="btn orange waves-effect waves-light">
                                    <span>Link</span>
                                    <i class="material-icons right">thumb_up</i>
                                </a>
                            </div>
                        </div> 
            </div>
            <div class="col s12 m6 l6 xl6">
                    <div class="card">
                        <div class="card-image">
                            <img src="images.jpg" alt="Fruit">
                            <a href="#" class="halfway-fab btn-floating red pulse">
                                <i class="material-icons ">favorite</i>
                            </a>
                        </div>
                            <div class="card-content">
                                <h2 class="card-title">Food Health</h2>
                                <p>Fruit is best food for People and animal</p>
                            </div>
                            <div class="card-action">
                                <a href="#" class="btn orange waves-effect waves-light">
                                    <span>Link</span>
                                    <i class="material-icons right">thumb_up</i>
                                </a>
                            </div>
                        </div> 
            </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script>
         $(function(){
             $('.sidenav').sidenav();
             
         })
     </script>
    @yield('content')
</body>
</html>
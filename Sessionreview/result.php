<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <div class="container mt-4">
        <div class="card bg-info shadow-lg">
            <div class="card-header text-center">
                <h1>Welcome:
                <?php
                    // session start before using session [session start have only one in one document]
                    session_start();
                    // isset($_SESSION['user']) check if session has created!
                    // !empty($_SESSION['user']) check if session has value

                        if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
                            // display value of session value
                            echo $_SESSION['user'];
                        }else {
                            // if don't have session value go to login form
                            header("location:index.php");
                        }
                    ?> 
                    </h1>   
            </div>
            <div class="card-body">
                <p>Thank You!</p>
                <p> <a href="signout.php" class= "card-link btn btn-warning float-right"> Signout</a></p>
            </div>
        </div>
   </div>
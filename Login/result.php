<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<!-- example 1 - using absolute position for center -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <a class="navbar-brand abs" href="#">Navbar 1</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active" href="#">
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
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="logout.php">logout</a>
            </li>
        </ul>
    </div>
</nav>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
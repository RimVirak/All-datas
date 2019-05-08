
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
      <div class="container mt-4 shadow-lg">
         <div class="card ">
             <div class="card-header bg-warning">Result For Login</div>
             <div class="card-body">
                <p>
                    <?php echo session_start();
                          echo $_SESSION['name']; 
                    ?>
                </p>
                <p><?php
                          echo $_SESSION['pwd']; 
                    ?>
                </p>
             </div>
         </div>
         <!-- <p><a href="index.php" class="btn btn-info"> Go Back</a></p> -->
        
      </div>
         <hr>
         <p class="signout text-center"><a href="signout.php" class="btn btn-primary ">Sign Out</a></p>
     
</body>
</html>
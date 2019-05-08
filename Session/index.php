<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
      
  <div class="container mt-4">
     <div class="card bg-warning shadow-lg text-center">
        <div class="card-header">Session Learning</div>
        <div class="card-body">
            <form action="process.php" method="POST">
                <div class="form-group">
                     <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
             <div class="form-group">
                     <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
             <div class="form-group">
                     <input type="submit" name="btn-login" class="btn btn-primary btn-block" value="Login">
                </div>
            </form>

        </div>
       </div>
  </div>
</body>
</html>
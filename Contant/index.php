<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>

    <div class="container mt-4">
         <div class="card bg-success">
             <div class="card-header">Contant Form</div>
             <div class="card-body">
                <form action="process.php" method="POST">
                     <div class="form-group" >
                          <input type="text" name="username" placeholder="Useranme" class="form-control">
                     </div>
                     <div class="form-group">
                           <textarea name="message" class="form-control" cols="30" row="5" placeholder="Message"></textarea>
            
                     </div>
                     <div class="form-group">
                          <button class=" btn btn-primary btn-block" type="Submit" name="btn-submit"> Send message</button>
                     </div>
                </form>
             </div>
         </div>
    </div>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Value from Checkbox</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>
         <div class="container mt-4">
               <div class="card bg-info">
                    <div class="card-header text-center">Get Value from Checkbox</div>
                    <div class="card-body">
                          <form action="process.php" method="POST">
                               <div class="form-check">
                                   <input type="checkbox" name="subject[]" class="form-input-check" value="PHP" checked>PHP
                               </div> 
                               <div class="form-check">
                                    <input type="checkbox" name="subject[]" class="form-input-check" value="Java">Java
                               </div>      
                               <div class="form-check">
                                    <input type="checkbox" name="subject[]" class="form-input-check" value="Boostrap">Boostrap
                               </div>  
                               <div class="form-check">
                                    <input type="checkbox" name="subject[]" class="form-input-check" value="Database">Database
                               </div>  
                               <div class="form-check">
                                    <input type="checkbox" name="subject[]" class="form-input-check" value="lavarel">Lavarel
                               </div>  
                               <div class="form-check">
                                    <button class=" btn btn-check btn-outline-warning mt-4" name="btn-check" type="submit">Submit</button>
                               </div>  
                          </form>
                    </div>
               </div>
         </div>
</body>
</html>
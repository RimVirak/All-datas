<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get_values</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

       <div class="container mt-4">
               <div class="card bg-success">
                    <div class="card-header text-center">Get Informations</div>
                    <div class="card-body">
                       <form action="process.php" method="POST">
                          <div class="form-check ">
                               <input type="radio" name="geander" class="form-check-input" value="Male" checked>Male
                          </div>
                          <div class="form-check">
                                <input type="radio" name="gender" class="form-check-input" value="Female">Famale
                          </div>
                          <hr>
                              <div class="form-group">
                                   <select name="subjectt" class="form-control">
                                     <option value="PHP">PHP</option>
                                     <option value="Java">Java</option>
                                     <option value="DaTabase">DaTabase</option>
                                     <option value="Lavarel">Lavarel</option>
                                     <option value="Boostrap">Boostrap</option>
                                   </select>
                              </div>
                              <div class="form-group">
                                    <button class="btn btn-primary btn-block" name="btn-submit">Submit</button>
                              </div>

                       </form>
                    </div>
               </div>
       </div>
    
</body>
</html>
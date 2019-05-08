<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StudentList</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>
      <div class="container mt-4">
           <table calss="table table-bordered table-striped ">
               <tr>
                   <th>Student ID</th>
                   <th>Student Name</th>
                   <th>Student Email</th>
                   <th>Student Province</th>
               </tr>
               <?php  include_once "process.php"; ?>
           </table>
           <hr>
           <p><a href="addstudent.php" class=" btn btn-info">Add student</a></p>

      </div>
       
    
</body>
</html>
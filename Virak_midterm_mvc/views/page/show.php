<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add student </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-4">
   <a href="views/page/add.php" class="btn btn-info">Add student</a>
          <table class="table table-striped table-bordered mt-4 ">
          <thead class="table table-dark">
             <th>#ID</th>
             <th>FirstName</th>
             <th>Lastname</th>
             <th>Gender</th>
             <th>Phone</th>
             <th>Email</th>
             <th>Province</th>
          
          </thead>
          <?php
               $result=show();
                 foreach($result as $data):                  
    ?>

          <tbody>
                <tr>
                <td><?php echo $data['id'];  ?></td>
                <td><?php echo $data['firstname'];  ?></td>
                <td><?php echo $data['lastname'];  ?></td>
                <td><?php echo $data['gender']; ?></td>
                <td><?php echo $data['phone']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['province']; ?></td>            
                </tr>

          </tbody>
               <?php  endforeach ?>
          </table>
           

    </div>
</body>
</html>
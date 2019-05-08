
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud_Teacher</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <div class="card show-lg">
            <div class="card-body">
                <a href="add.php"><i class="material-icons"> control_point </i></a>
                <hr>
            <table class="table table-bordered">
                   <thead>
                       <tr>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Gender</th>
                           <th>Age</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                   <?php
                       include_once "connection.php";
                       $query = "SELECT * FROM tbl_teacher";
                       $result = mysqli_query($dbconnect, $query);

                       foreach($result as $row):
                   ?>
                       <tr>
                         <td><?php echo $row['tea_id']; ?></td>
                         <td><?php echo $row['tea_name']; ?></td>
                         <td><?php echo $row['tea_email']; ?></td>
                         <td><?php echo $row['tea_gender']; ?></td>
                         <td><?php echo $row['tea_age']; ?></td>
                         <td>
                             <a href="edit.php?id=<?php echo $row['tea_id']; ?>"> <i class="material-icons"> create </i></a>
                             <a href="delete.php?id=<?php echo $row['tea_id']; ?>"<i class="material-icons text-danger"> delete </i></a>
                         </td>
                       </tr>
                       <?php endforeach ?>
                    </tbody>
                  </div>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>
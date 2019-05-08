<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<div class="container mt-4">
     <table class="table table-striped table-bordered">
        <tr>
           <th>Student ID </th>
           <th>Student Name </th>
           <th>Student Email </th>
           <th>Student Province </th>
        </tr>
        <?php include_once "processselect.php"?>
     </table>
     <hr>
     <p><a href="formadd.php" class=" btn btn-info">Add News</a></p>
</div>
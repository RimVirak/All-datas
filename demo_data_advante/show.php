<table class="table table-striped table-hover table-bordered mt-4">
    <thead class="table-dark text-white">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Province</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            include "connection.php";
            $query = "SELECT * FROM tblstudent";
            $result = mysqli_query($connection, $query);

            foreach($result as $students) {
        ?>
        <tr>
            <td><?php echo $students['id'] ?></td>
            <td><?php echo $students['name']?></td>
            <td><?php echo $students['gender'] ?></td>
            <td><?php echo $students['email'] ?></td>
            <td><?php echo $students['province'] ?></td>
        </tr>
            <?php }?>
    </tbody>
</table>
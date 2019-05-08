
<?php 
  require_once "connection.php";
  
$sql = " SELECT * FROM tbl_students";
$result = mysqli_query($connection, $sql);

while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php  echo $row['stu_id']?></td>
      <td><?php  echo $row['stu_name']?></td>
      <td><?php  echo $row['stu_email']?></td>
      <td><?php  echo $row['stu_province']?></td>
    </tr>
<?php    
}
?>
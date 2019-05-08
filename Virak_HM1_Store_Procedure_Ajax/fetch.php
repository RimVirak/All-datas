<?php
    $dbconnect = mysqli_connect('localhost','root','','test');
    $output = '';
    $sql = "SELECT * FROM tblstudent WHERE id LIKE '%".$_POST["search]."%'";
    $result= mysqli_query($dbconnect,$sql);

    if(mysqli_num_rows($result) > 0){

        $output .='<h3 align ="center"> Search Result</h3>'; 
        $output .='<div class="table-responsive">
                    <table class=" table table bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>GPA</th>
                    </tr>';

        while($row = mysqli_fetch_array($result)) {
            $output .= '
               <tr>
                     <td>'.$row['id'].'</td>
                     <td>'.$row['name'].'</td>
                     <td>'.$row['email'].'</td>
                     <td>'.$row['gpa'].'</td>
            ';
        }   
        
        echo $output;
    }else{

        echo 'Data Not Found';
    }

?>
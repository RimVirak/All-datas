
<div id="users">
    <div class="col-md-12">
        <div class="pull-left">
            <input class="search" placeholder="Search" />
        </div>

        <div class="pull-right">
            <a href="index.php?action=add"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a> &nbsp;
        </div>
    </div>
</div> 
    <div class="container mt-4 ">
        <!-- ?php 
            include 'connection.php';
            $id = $_GET['id'];
            $query = 'selete*from tbl_teacher';

         
        ?> -->
        <table class="table table-striped ">
             <tr>
                 <th>#</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Gender</th>
                 <th>Action</th>
             </tr>
             <tr>
                 <td>2</td>
                 <td>rotha</td>
                 <td>rotha.rit@gmai.com</td>
                 <td>M</td>
                 <td>
                   <a href="index.php?action=viewDetail&id"><i class="glyphicon glyphicon-eye-open text-center  " style="color:green;"></i></a>&nbsp;
                   <a href="index.php?action=edit&id"><i class="glyphicon glyphicon-edit text-center " style="color:blue;"></i></a>&nbsp;
                   <a href="index.php?action=delete&id"><i class="glyphicon glyphicon-trash text-center "style="color:red;"></i></a>
                 </td>
             </tr>
             <tr>
                 <td><?php ?></td>
                 <td>sreyem</td>
                 <td>sreyem.EM@gmai.com</td>
                 <td>F</td>
                 <td>
                   <a href="index.php?action=viewDetail"><i class="glyphicon glyphicon-eye-open text-center  " style="color:green;"></i></a>&nbsp;
                   <a href="index.php?action=edit"><i class="glyphicon glyphicon-edit text-center " style="color:blue;"></i></a>&nbsp;
                   <a href="index.php?action=delete"><i class="glyphicon glyphicon-trash text-center "style="color:red;"></i></a>
                 </td>
             </tr>
        
        </table>

    </div>
    
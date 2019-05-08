<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<div class="container mt-4">
         <div class="card bg-info">
             <div class="card-header">Add News student</div>
             <div class="card-body">
                 <form action="processadd.php" method="post">
                     <div class="form-group">
                         <input type="username" name="username" class="form-control">
                     </div>
                     <div class="form-group">
                         <input type="email" name="email" class="form-control">
                     </div>
                     <div class="form-group">
                         <input type="province" name="province" class="form-control">
                     </div>
                     <div class="form-group">
                         <button class=" btn btn-block btn-primary" type="submit" name="btn-add ">Add student Now</button>
                     </div>
                 </form>
             </div>
         </div>

</div>
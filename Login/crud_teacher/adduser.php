<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  
  <body class=" bg-dark ">
      <div class="container mt-4">
      <div class="row " >
            <div class="col-4"></div>
            <div class="col-4">
            <div class=" card show-lg">
                  <div class="card-header text-center"> Add Teacher </div>
                  <div class="card-body">
                       <form action="processadd.php" method="post">
                           <div class="form-group">
                                 <input type="text" name="teacher" class="form-control" placeholder="Username" required>
                           </div>
                           <div class="form-group">
                                 <input type="email" name="email" class="form-control" placeholder="Email" required>
                           </div>
                           <div class="form-group">
                                 <input type="text" name="age" class="form-control" placeholder="Age" required>
                           </div>
                           <div class="form-group">
                               <select name="gender" class="form-control" required>
                                   <option value="Male" required>Male</option>
                                   <option value="Female">Female</option>
                                   <option value="Other">Otherr</option>
                               </select>
                           </div>
                           <br>
                         
                           <div class="form-group">
                                <button class="btn btn-warning" type="submit" name="btn-submit">Add News Teacher</button>
                           </div>
                       </form>
                  </div>
             </div>
          </div>
        </div>
          
      </div>
    </body>
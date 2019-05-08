<?php 
    if(isset($_POST['submit'])){
        $Symbol = $_POST['Symbol'];
        foreach($Symbol as $value):

        endforeach;
?>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <div class="container mt-4">
          <div class="card bg-info shadow-lg">
              <div class="card-header">Result</div>
              <div class="card-body">
               <?php foreach($Symbol as $value): ?>
               <p><?php echo $value; ?></p>
               <?php endforeach; ?>
              </div>
          </div>
          <hr>
          <a href="index.html" class="btn btn-danger">Back</a>
      </div>   
<?php 
  }
   
 ?>

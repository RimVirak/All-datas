<div class="container-mt4">
<h2 class="text-center text-primary">PHP OOP</h2>
<hr>
<div class="col-12">
     <div class="col-6">
          <div class="card">
              <div class="card-header text-center">Find Factorail</div>
              <div class="card-body">
                 <form action="#" method="post" >
                    <div class="form-group">
                        <label for="input">Factorail</label>
                        <input type="text"  class="form-control" name="factorail" placeholder="Enter Something" required>
                    </div>
                    <div class="form-group">
                         <button class="btn btn-primary btn-sm" type="submit" name="btn-cal">Calculate</button>
                    </div>
                 </form>
              </div>
              <div class="card-footer">
                  <?php 
                  
                     include 'cal.php';
                  ?>
              </div>
          </div>
     </div>
     <div class="col-6"></div>
</div>
</div>
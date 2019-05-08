
    <div class="container mt-4">
    <div class="card">
     <div class="card-header text-center">Calculate</div>
       <form action="#" method ="POST">
        <div class="form-control">
        </div>
         <p>Factorail</p>
          <input type="number" name="number" class="form-control col-2 rows-4" id="number">
          <br>
            <button type="submit" name="btn-add" class="btn btn-primary btn-sm text-center">Calculate</button>
            <hr>
            <?php   
                 if($_POST){  
                      $fact = 1;  
                       //getting value from input text box 'number'  
                      $number = $_POST['number'];  
                       echo "Factorial of $number:<br><br>";  
                      //start loop  
                       for ($i = 1; $i <= $number; $i++){         
                       $fact = $fact * $i;  
                     }  
                      echo $fact . "<br>";  
                  }  
             ?>  
        </form>
    </div>
   </div>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample Calulat</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
               <div class="card bg-warning shadow-lg">
                    <div class="card-header text-center">Single Calulat</div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" name=" Number1"  class="form-control" placeholder="Enter Number1">
                            </div>
                             <div class="form-group">
                                <input type="text" name=" Number2" class="form-control" placeholder="Enter Number2">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary " type="text" name="btn-add">(+)Number</button>
                                <button class="btn btn-success " type="text" name="btn-minus">(-)Number</button>
                                <button class="btn btn-dark" type="text" name="btn-multiple">(*)Number</button>
                                <button class="btn btn-Info  " type="text" name="btn-devide">(%)Number</button>
                            </div>
                        </form>
                    </div>
               </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <br>
    <div class="container">
          <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
          <div class="card bg-info shawdow-lg">
               <div class="card-header">Result Calulat</div>
               <div class="card-body">
                   <h1 class="text-center text.white">
                      <?php 
                         if (empty ($_POST['Number1']) && empty ($_POST['Number2'])){
                             echo "Empty Field";
                         }else{
                            $Number1 = $_POST['Number1'];
                            $Number2 = $_POST['Number2'];
                            //  echo "Do somethime";
                             if (isset($_POST['btn-add'])){
                                 function addNumber($n1, $n2){
                                     echo $n1 + $n2;
                                 }
                                     addNumber ($Number1, $Number2);
                             }
                            // for minus the number
                             if (isset($_POST['btn-minus'])){
                                function addNumber($n1,$n2){
                                    echo $n1 - $n2;
                                }
                                    addNumber ($Number1, $Number2);
                            }
                            // For mutiple the number
                             if (isset($_POST['btn-multiple'])){
                                function addNumber($n1,$n2){ 
                                   return $n1 * $n2;
                                }
                                  echo  addNumber ($Number1,$Number2);
                            }
                            // For  Devide of the number
                            if (isset($_POST['btn-devide'])){
                                if($Number1 == 0 || $Number2 == 0 ){
                                    echo "You are not correct!!!";
                                }else{
                                    function addNumber($num1 , $num2){
                                        echo  $num1 / $num2;
                                    }
                                  addNumber ($Number1,$Number2);
                                }    
                            }             
                         }
                        
                      ?>
                   </h1>
               </div>
          </div>
          </div>
          </div>
    </div>
</body>
</html>
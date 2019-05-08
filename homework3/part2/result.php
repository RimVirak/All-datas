<?php 
if(isset($_POST['submit'])){
include "IcalculateMoney.php";
class result implements IcalculateMoney{

     public $totalInerest;
     public $totalManey;
     public $paymentPerMonth;
     public function totalInerest(){
        
         $this->totalInerest=($_POST['capital']*$_POST['duration'])*($_POST['rate']/100);
    
        return $this->totalInerest;
     }
     public function totalManey(){
       
         $this->totalManey=$_POST['capital']+$this->totalInerest();
    
        return $this->totalManey;
     }

 public function paymentPerMonth(){
    
     $this->paymentPerMonth=$this->totalManey()/$_POST['duration'];
     return $this->paymentPerMonth;
 }
}

$results = new result();
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<div class="container mt-4">
<form method="POST">
    <label for=""> 
         Capital: 
         <input type="number" name="capital" placeholder="Capital">
    </label>
    <br><br>
    <label for="">
         Interest:
         <input type="number" name="rate" step="0.00" placeholder="Rate">
    </label>
    <br><br>
    <label for="">
         Duration:
         <input type="number" name="duration" placeholder="Capital">
    </label>
    <br>
         <button class="btn btn-success btn-sm" type="submit" name="submit">OK</button>
</form>
         <p><?php echo "Total Money: ".$results->totalManey()."$" ;?></p>
         <p><?php echo "Total Interest: ".$results->paymentPerMonth()."$" ;?></p>
         <p><?php echo "Payment of per month: ".$results->totalInerest()."$" ;?></p>
</div>
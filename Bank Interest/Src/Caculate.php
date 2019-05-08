
<!-- <head><style>*{font-size: 25px; color: blue;} span {color: red; input{padding:2px;}}</style></head> -->
<link rel="stylesheet" href="Src/css/bootstrap.min.css">
<script src="Src/js/bootstrap.min.js"></script>
 <?php
// include_once 'Iaeon.php';
include_once('Interest.php');
Class Caculate Implements Interest{
    public $capital;
    public $duration;
    public $interestRate;

    public function calculate($capital, $duration, $interestRate){
        return "Capital: <span>" . $capital . "$ </span> <br>" . "Interest: <span>" .$interestRate . "% </span> <br> Duration: <span>" . $duration . " Year(s) </span> <br>"
        ."Total Money: <span>" . $thello = $capital + ($capital*$interestRate /100)*$duration ."$ </span> <br>". "Payment Per Month: <span>"
         .$totalPerMonth = ($capital / $duration) + ($capital * $interestRate /100) . "$ </span> <br>"
        . "Total Interest: <span>" . $hello = ($capital * $interestRate /100)*$duration . "$ </span>";
    }
} 

 ?> 

  <div class="container mt-4">
     <div class="card">
     <div class="card-body">
    
    <form action="#" method="POST">
        Capital: 
        <label for="">
        <input type="text" placeholder="capital" name="capital" required>
        </label> <br>
        <label for="">Duration: </label>
        <input type="text" placeholder="duration" name="duration" required><br>
        <label for="">Interest: </label>
        <input type="text" placeholder="interest" name="interest" required> 
        <button type="submit" name="btn-submit btn-primary">Calculate</button>
    </form>
    </div>
    </div>
    </div>
<?php
if(isset($_POST['btn-submit'])){
    $capital = $_POST['capital'];
    $interestRate = $_POST['interest'];
    $duration = $_POST['duration'];

    $total = new Caculate();
    echo $total->calculate($capital,$duration,$interestRate);
}
?>
<?php 
    

    
// ?>

<head><style>*{font-size: 25px; color: blue;} span {color: red; input{padding:2px;}}</style></head>

<?php
// include_once 'Iaeon.php';
include_once('InterestAeon.php');
Class Caculate Implements InterestAeon{
    public $capital;
    public $duration;
    public $interest;

    public function calculate($capital, $duration, $interest){
        return "Capital: <span>" . $capital . "$ </span> <br>" . "Interest: <span>" . $interest . "% </span> <br> Duration: <span>" . $duration . " Year(s) </span> <br>"
        ."Total Money: <span>" . $thello = $capital + ($capital*$interest /100)*$duration ."$ </span> <br>". "Payment Per Month: <span>"
         .$totalPerMonth = ($capital / $duration) + ($capital * $interest /100) . "$ </span> <br>"
        . "Total Interest: <span>" . $hello = ($capital * $interest /100)*$duration . "$ </span>";
    }
}

?>

    <form action="#" method="POST">
        <label for="">Capital: </label>
        <input type="text" placeholder="capital" name="capital" required> <br>
        <label for="">Duration: </label>
        <input type="text" placeholder="duration" name="duration" required><br>
        <label for="">Interest: </label>
        <input type="text" placeholder="interest" name="interest" required> 
        <button type="submit" name="btn-submit">OK</button>
    </form>

<?php
if(isset($_POST['btn-submit'])){
    $capital = $_POST['capital'];
    $interest = $_POST['interest'];
    $duration = $_POST['duration'];

    $total = new Caculate();
    echo $total->calculate($capital,$duration,$interest);
}
?>
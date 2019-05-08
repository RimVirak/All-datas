

<?php
include_once 'Iaeon.php';
class CalculateInterest implements Iaeon{
    public $capital;
    public $interest;
    public $duration;

    public function calculate($capital, $duration, $interest){
        return "Capital: " . $capital . "<br>" . "Interest: " . $interest . " <br> Duration: " . $duration . " Year(s)<br>"
        . "Total Money: " . $total = $capital + ($capital * $interest /100) * $duration . "$ <br>" 
        . "Payment Per Month: " .$totalPerMonth = ($capital / $duration) + ($capital * $interest /100) . "$ <br>"
        . "Total Interest: " . $totalInterest = ($capital * $interest /100) * $duration . "$";
    }
}

$total = new CalculateInterest();
echo $total->calculate(870, 12, 1.9);
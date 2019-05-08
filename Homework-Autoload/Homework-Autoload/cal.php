<?php
    use CodeCourse\Calculation;
    require "public/vendor/autoload.php";

    $capital = $_POST['capital'];
    $interestrate = $_POST['interestrate'];
    $duration = $_POST['duration'];

	$phors = new Calculation($capital, $interestrate, $duration);

	$phorsTotalMoney = $phors->totalMoney();
	$phorsPaymentPerMonth= $phors->paymentPerMonth();
    $phorsInterest = $phors->totalInterest();
?>
<?php include_once("header.php");?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 form-style">
        <h3 class="text-center" >Result</h3><hr>
        <p>You borrow us <b><?php echo $capital;?>$</b></p>
        <p>Your interest is <b><?php echo $interestrate?>%</b></p>
        <p>The duration is <b><?php echo $duration?>/year</b></p><hr>
        <p> So you have to pay us back <b><?php echo $phorsTotalMoney;?>$</b></p>
        <p> Your payment/month is <b><?php echo $phorsPaymentPerMonth;?>$</b></p>
        <p> Your total interest is <b><?php echo $phorsInterest;?>$</b></p>
    </div>
    <div class="col-md-4"></div>
</div>
<?php include_once("footer.php");?>
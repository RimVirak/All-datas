<?php include_once("header.php");?>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4 form-style" >
		<form method="POST" action="cal.php">
			<h3 class="text-center" >Calculate Interest</h3><hr>
			<div class="form-group">
				<label for="cap" >Capital</label>
				<input type="number" id="cap" name="capital" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="inter" >Interest Rate</label>
				<input type="number" id="inter" name="interestrate" step=0.1 value=1.9 class="form-control" required>
			</div>
			<div class="form-group">
				<label for="dura" >Duration</label>
				<input type="number" id="dura" name="duration" class="form-control" required>
			</div>
			<button name="submit" type="submit" class="btn btn-success">Calculate</button>		
		</form>
	</div>
	<div class="col-md-4"></div>
</div>
<?php include_once("footer.php");?>
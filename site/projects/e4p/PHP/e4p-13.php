<h1>Computing Compound Interest</h1>

<?php

$principal = '0';
$rate = '0';
$years = '0';
$compounded = '0';



if (isset($_POST['submitted']) ) {

	if (isset($_POST['principal']) ){
		$principal = $_POST['principal'];
	}

	if (isset($_POST['rate']) ){
		$rate = ($_POST['rate']/100);
	}

	if (isset($_POST['years']) ){
		$years = $_POST['years'];
	}

	if (isset($_POST['compounded']) ){
		$compounded = $_POST['compounded'];
	}
}


$compoundTime = $compounded * $years;
$rateCompound = $rate / $compounded;
$total = pow($principal * (1 + $rateCompound), $compoundTime);


echo $total;
?>


<form method='POST'>
	<div class='field'>
		<label>Enter the principal amount</label>
		<input type="number" name="principal" min="0" step=".01">
	</div>

	<div class='field'>
		<label>Enter the rate percentage</label>
		<input type="number" name="rate" min="0" step=".01">
	</div>

	<div class='field'>
		<label>How many years of interest?</label>
		<input type="number" name="years" min="0">
	</div>

	<div class='field'>
		<label>How many times is interest compounded annually?</label>
		<input type="number" name="compounded" min="0">
	</div>

	<button type="submit" name="submitted">
		Pound it!
	</button>

</form>
<h1>Computing Simple Interest</h1>

<?php

$principal = '0';
$rate = '0';
$years = '0';


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
}

$yearRate = $rate * $years;
$newTotal = $principal * (1 + $yearRate);
$finalResult = number_format($newTotal, 2);

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

	<button type="submit" name="submitted">
		Let's Make Money
	</button>

</form>

<?php
	if ($newTotal > 0) {
		echo "<p>After $years years at your rate, the investment will be worth $ $finalResult.</p>";
	}
?>
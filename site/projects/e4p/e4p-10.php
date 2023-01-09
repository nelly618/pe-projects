

<?php

	if (isset($_POST['submitted'])) {

		if (isset ($_POST['priceOne']) ) {
			$priceOne = $_POST['priceOne'];
		}

		if (isset ($_POST['quantityOne']) ) {
			$quantityOne = $_POST['quantityOne'];
		}

		if (isset($_POST['priceTwo']) ) {
			$priceTwo = $_POST['priceTwo'];
		}

		if (isset ($_POST['quantityTwo']) ) {
			$quantityTwo = $_POST['quantityTwo'];
		}

		if (isset($_POST['priceThree']) ) {
			$priceThree = $_POST['priceThree'];
		}

		if (isset ($_POST['quantityThree']) ) {
			$quantityThree = $_POST['quantityThree'];
		}
	}

	$itemOne = $priceOne * $quantityOne;
	$itemTwo = $priceTwo * $quantityTwo;
	$itemThree = $priceThree * $quantityThree;


	$subtotal = $itemOne + $itemTwo + $itemThree;
	$totalTax = $subtotal * .055;
	$finalTotal = $subtotal + $totalTax;
?>


Self-Checkout

<form method="POST">
	<div class='field'>
		<label>Item 1 price</label>
		<input type='number' name='priceOne' min='0' step='.01'>
	</div>

	<div class='field'>
		<label>Quantity of item</label>
		<input type='number' name='quantityOne' min='0'>
	</div>

	<div class='field'>
		<label>Item 2 price</label>
		<input type='number' name='priceTwo' min='0' step='.01'>
	</div>

	<div class='field'>
		<label>Quantity of item</label>
		<input type='number' name='quantityTwo' min='0'>
	</div>

	<div class='field'>
		<label>Item 3 price</label>
		<input type='number' name='priceThree' min='0' step='.01'>
	</div>

	<div class='field'>
		<label>Quantity of item</label>
		<input type='number' name='quantityThree' min='0'>
	</div>

	<button type='submit' name="submitted">
		Cha-Ching
	</button>
</form>

<div class='calculations'>
	<p>Subtotal: <?=number_format($subtotal, 2)?></p>
	<p>Tax: <?=number_format($totalTax, 2)?></p>
	<p>Total: <?=number_format($finalTotal, 2)?></p>
</div>




<style>
	form {
		background: lightgray;
		padding: 10px;
		border-radius: 20px;
		max-width: 400px;
	}

	label, input {
		display: block;
	}

	input {
		width: 80px;
	}

	.field + .field, button[type='submit'] {
		margin-top: 10px;
	}

	.title {
		font-family: helvetica;
		font-size: 24px;
		font-weight: 700;
	}

	p {
		max-width: 70ch;
		font-size: 16px;
	}
</style>

<?php

	$pizzaSlice = '8';
	$people = '0';
	$pizza = '0';

	if (isset($_POST['submitted']) ) {

		if ( isset($_POST['people']) ) {
			$people = $_POST['people'];
			}

		if ( isset($_POST['pizza']) ) {
			$pizza = $_POST['pizza'];
		}
	}

		$totalSlices = floatval($pizza) * floatval($people); 
		$fullPie = ceil($totalSlices / 8);
		$leftover = $fullPie * 8 - $totalSlices;
?>



<form method='POST'>

	<p class="title">Let's Have a Pizza Party!</p>
	<p class='description'>We're planning for a party and everyone is excited for pizza! How many pizzas will you need, and will there be any leftovers?</p>

	<div class='field'>
		<label>How many people?</label>
		<input type='number' name='people' min='0'>
	</div>

	<div class='field'>
		<label>How many slices of pizza per person?</label>
		<input type='number' name='pizza' min='1'>
	</div>

	<button type="submit" name="submitted">
		Let's Party!
	</button>
	
</form>

<?php 
	if (isset($_POST['submitted']) ) {

		if ($totalSlices >= 0) {
		echo "<p>You have $people people coming to the party and $pizza pizza slices per person.</p>
			<p>You will need $totalSlices slices total. As each person gets $pizza slices, you will need to buy $fullPie pizzas and will have $leftover slices left over.</p>"; 
	} else {
		echo ""; 
	}
}

	?>
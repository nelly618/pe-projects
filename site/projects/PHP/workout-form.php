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
	$days = '0';
	$minutes = '0';


	if ( isset($_POST["submitted"]) ) {

		if ( isset($_POST["days"]) ) {
		$days = $_POST["days"];
	}
		
		if ( isset($_POST["minutes"]) ) {
		$minutes = $_POST["minutes"];
	}

		$total = floatval($days) * floatval($minutes);

		$missing = 150 - $total;
	}

?>


<form method="POST">
	
	<p class="title">Do You Workout Enough?</p>
	<p class='description'>According to the CDC, adults should peform 150 minutes of physical activity weekly. Let's see if you're getting the right amount in!</p>

	<div class="field">
		<label>Number of Days Each Week</label>
		<input type="number" name='days' min="0" max="7">
	</div>

	<div class="field">
		<label>Number of Minutes Each Day</label>
		<input type="number" name='minutes' min="0">
	</div>

	<button type="submit" name="submitted">
		I Workout!
	</button>

<?php 
	if ($total > 149) {
		echo "<p>Congratulations! You are exercising at least the recommended amount. You are working out $total minutes each week!</p>"; 
	} else {
		echo "<p>Sorry! Unfortunately you are not exercising the recommended amount. You need to exercise $missing more minutes weekly.</p>"; 
	}

	?>

</form>
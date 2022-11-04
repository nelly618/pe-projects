<style>
	form {
		max-width: 400px;
	}

	.field {
		display: flex;
		flex-direction: column;
	}

	.field label {
		font-size: 14px;
		margin-bottom: 4px;
	}

	button[type='submit'], .field + .field {
		margin-top: 10px;
	}


</style>






<?php 

	if ( isset($_POST["submitted"]) ) {

		if ( isset($_POST["guests"]) ) {
		$guests = $_POST["guests"];
	}
		
		if ( isset($_POST["berries"]) ) {
		$berries = $_POST["berries"];
	}

		$total = floatval($guests) * floatval($berries);

		echo "<p>$total</p>";
	}


?>

<form method="POST">

	<p>Insert info here</p>

	<div class='field'>
		<label>Number of Guests</label>
		<input type='number' name='guests' value="<?=$guests?>" min='0'>
	</div>

	<div class='field'>
		<label>Berries per Guest</label>
		<input type="number" name="berries" value="<?=$berries?>" min='0'>
	</div>

	<button type ='submit' name="submitted">
		Submit
	</button>

</form>









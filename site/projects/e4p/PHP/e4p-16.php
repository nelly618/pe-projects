<?php

	if ( isset($_POST['submitted']) ) {

		if ( isset($_POST['age']) ) {
			$age = $_POST['age'];
		}
	}

?>

<h1>Legal Driving Age</h1>

<form method="POST">
	<div class='field'>
		<label>What is your age?</label>
		<input type='number' name='age' min='0'>
	</div>

	<button type="submit" name="submitted">
		Check my ID
	</button>
</form>




<?php

	if (isset($_POST['submitted']) ){

	if ($age > 15) {
		echo "You are old enough to legally drive.";
	} else {
		echo "You are not old enough to legally drive." ;
	}
}
	?>
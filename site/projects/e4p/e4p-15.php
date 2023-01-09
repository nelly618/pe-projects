<?php

	if ( isset($_POST['submitted']) ) {

		if ( isset($_POST['username']) ) {
			$username = $_POST['username'];
		}

		if (isset($_POST['password']) ) {
			$password = $_POST['password'];
		}
	}

?>

<h1>Password Validation</h1>



<form method='POST'>
	
	<div class='field'>
		<label>Username</label>
		<input type='text' name="username">
	</div>

	<div class='field'>
		<label>Password</label>
		<input name="password" type="password">
	</div>

	<button type="submit" name="submitted">
		Enter
	</button>

</form>


<?php

	if (isset($_POST['submitted']) ){

	if ($password == 'Aceson319' && $username == 'chanelle') {
		echo "Welcome!";
	} else {
		echo "I don't know you." ;
	}
}
	?>
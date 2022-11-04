<style>
	form {
		max-width: 400px;
		padding: 20px;
	}

	.field {
		display: flex;
		flex-direction: column;
	}

	.field + .field {
		margin-top: 10px;
	}

	:is(div) label {
		font-size: 20px;
		margin-bottom: 3px;
	}

	button {
		margin-top: 10px;
	}

</style>




<?php 
	if (isset($_POST['submitted']) ) {
		if (isset($_POST['title']) ) {
			$title = $_POST['title']; 
		}
		if (isset($_POST['genre']) ) {
			$genre = $_POST['genre']; 
		}
		if (isset($_POST['episodes']) ) {
			$episodes = $_POST['episodes']; 
		}
	}
	?>




<form method="POST">
	<div class='field'>
		<label>Anime Title</label>
		<input type="text" name="title">
	</div>

	<div class='field'>
		<label>Genre</label>
		<input type="text" name="genre">
	</div>

	<div class='field'>
		<label>Episodes</label>
		<input type="range" name="episodes">
	</div>

	<button type="submit" name="submitted">Submit</button>

 <?php 
 	if ( isset($_POST['submitted']) ) {
 		echo "<p>Thank you! Your suggestion has been submitted.</p>";
 	}
?>

</form>
<style>
	form {
		background: #5a73b0;
		padding: 10px;
		border-radius: 20px;
		max-width: 450px;
		margin-right: auto;
		margin-left: auto;
		margin-top: 40px;
	}

	.title + .description {
		margin-top: 6px;
	}

	label, input {
		display: block;
		font-size: 16px;
		letter-spacing: .06em;
	}

	input {
		width: 80px;
	}

	label + input {
		margin-top: 5px;
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

	.description {
		margin-bottom: 10px;
	}

	.error {
		color: red;
		font-weight: 800;
	}

	button {
		padding: 6px;
		border-radius: 15px;
	}

	button:hover {
		background: #314370;
		color: white;
		transition: all .2s ease-in-out;
	}
	
</style>

<?php
	$title = "";
	$specify = "";
	$starter = '1';
	$ender = '1';

	$hasTitle = false;
	$hasSpecify = false;


	if ( isset($_POST["submitted"]) ) {

		if ( isset($_POST["title"]) ) {
		$title = $_POST["title"];

		if ( strlen($title) > 0 ) {
			$hasTitle = true;
		} else {
			$titleError = "Please add Anime title.";
		}
	}
		
		if ( isset($_POST["specify"]) ) {
		$specify = $_POST["specify"];

		if ( strlen($specify) > 0 ) {
			$hasSpecify = true;
		} else {
			$specifyError = "Please specify if you want consideration of a specific arc or the entire saga.";
		}
	}

		if ( isset($_POST["starter"]) ) {
		$starter = $_POST["starter"];

		if ( intval($starter) > 0 ) {
			$hasStarter = true;
		} else {
			$starterError = "Please select beginning episode to be considered.";
		}
	}

		if ( isset($_POST["ender"]) ) {
		$ender = $_POST["ender"];

		if ( strlen($ender) > 0 ) {
			$hasEnder = true;
		} else {
			$enderError = "Please select last episode for consideration.";
		}
	}
}

?>


<form method="POST">
	
	<p class="title">Thinking of Other Animes to Add?</p>
	<p class='description'>Tell us a little about it below!</p>

	<div class="field">
		<label>Name of Anime</label>
		<input type="text" name='title'>
		<?php if ($titleError) { ?>
			<p class='error'><?=$titleError;?></p>
		<?php } ?>
	</div>

	<div class="field">
		<label>Entire Show or Specific Saga?</label>
		<input type="text" name='specify'>
		<?php if ($titleError) { ?>
			<p class='error'><?=$specifyError;?></p>
		<?php } ?>
	</div>

	<div class="field">
		<label>Beginning Episode to Consider?</label>
		<input type="number" name='starter' min="1">
		<?php if ($titleError) { ?>
			<p class='error'><?=$starterError;?></p>
		<?php } ?>
	</div>

	<div class="field">
		<label>Ending Episode to Consider?</label>
		<input type="number" name='ender' min="1">
		<?php if ($titleError) { ?>
			<p class='error'><?=$enderError;?></p>
		<?php } ?>
	</div>

	<button type="submit" name="submitted">
		Go Binge and See!
	</button>

	<?php if ($hasTitle && $hasSpecify) {
			echo "<p>Done! Your submission will be considered for addition to the collection.</p>";
		} 
		?>

<!-- */*//*/* -->

</form>
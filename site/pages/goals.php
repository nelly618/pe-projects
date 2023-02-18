	<?php 
	require ('header.php');
?>

	<link rel='stylesheet' href='goals-style.css'>

	<main class='goal-list'>
		<inner-column>
			<h1 class='goal-header'>
				Goals
			</h1>

			<section class='all-goals'>
				<?php include('modules/goals-list.php'); ?>
			</section>
		</inner-column>
	</main>

<?php 
			include ('footer.php');
			?>
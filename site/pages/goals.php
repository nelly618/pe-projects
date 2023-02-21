	<?php 
	require ('../header.php');
?>

<link rel='stylesheet' href='../CSS/style.css'>
<link rel='stylesheet' href='../CSS/header.css'>
<link rel='stylesheet' href='../CSS/typography.css'>
<link rel='stylesheet' href='../CSS/goals-style.css'>

	<main class='goal-list'>
		<inner-column>
			<h1 class='goal-header'>
				Goals
			</h1>

			<section class='all-goals'>
				<?php include('../modules/goals-list.php'); ?>
			</section>
		</inner-column>
	</main>

<?php 
			include ('../footer.php');
			?>
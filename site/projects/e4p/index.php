<?php include('header.php'); ?>

	<?php 
	// router
	$page = 'index.php';
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	} else {
		$page = "";
	}
	?>

	<main class="page-content">

		<?php include('e4p.php');

		?>

		<?php

			if ($page == 'projects/e4p/e4p.php') {
				$_GET('projects/e4p/e4p.php') ;
			}

			if ($page == 'projects/e4p/PHP/e4p-8.php') {
				$_GET('projects/e4p/PHP/e4p-8.php') ;
			}

				?>
	</main>

<?php include('footer.php'); ?>
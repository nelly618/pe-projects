<html lang="en">
	<?php
		include('head.php');
		?>

	<!--CSS Reset!-->
	  <link rel="stylesheet" href="boilerplate/css/meyer-reset.css">
	  <link rel="stylesheet" href="boilerplate/css/setup.css">
	  <link rel='stylesheet' href='goals-style.css'>
	</head>


	<body>
		<?php 
		include ('header.php');
		?>

		<h1 class='goal-head'>
			<inner-column>
				Goals
			</inner-column>
		</h1>

		<main class='goal-list'>
			<inner-column>
				<list>
					<?php 
					include('each-goal.php');
					?>
				</list>
			</inner-column>
		</main>
		

		<?php

		include('footer.php');
		?>

   </body>
</html>
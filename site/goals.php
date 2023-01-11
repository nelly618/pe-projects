		<?php 
		include ('header.php');
		?>

		<link rel='stylesheet' href='goals-style.css'>

		<main class='goal-list'>
			<inner-column>
				<h1 class='goal-header'>
					Goals
				</h1>
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
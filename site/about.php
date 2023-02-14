<link rel='stylesheet' href='CSS/graphic-dipytch.css'>

<main class='main-content'>
	<inner-column>
		<h1>About Me</h1>

		<graphic-diptych>
		
	<?php
	$paragraphs = [1, 2, 3];
?>

		<content-one>
			<?php 
				$contentTitle = "content-one";

				$paragraph = "I was born in Savannah, Georgia and raised in a military town where diversity and various cultures were the norm. I now live in Metro-Atlanta which is its own kind of melting pot.

					Outside of career aspirations, you can find me walking my dog, at the gym, watching some (not-so) trashy TV, looking for a new place to travel to, or trying new plant-based recipes.";

				$image = "https://peprojects.dev/alpha-5/chanelle/images/personal-photos/duke-photo.jpg";

				include('modules/graphic-dipytch.php');
				?>
		</content-one>

		<content-two>
			
			<?php 
				$contentTitle = "content-two";

				$paragraph = "I have 8 years of experience in the healthcare sector, and have been a practicing PA since 2019. While in training for a transition into web development with Perpetual Education, I continue to work with patients full-time.";

				$image = "https://peprojects.dev/alpha-5/chanelle/images/personal-photos/sammy-photo.jpg";

				include('modules/graphic-dipytch.php');
				?>
		</content-two>

		<content-three>
			<?php 
				$contentTitle = "content-three";

				$paragraph = "As a web developer, I work to provide design that is interactive, accessible, and attractive for users. I hope to work with a company that values experience that also provides a different perspective.";

				$image = "https://peprojects.dev/alpha-5/chanelle/images/personal-photos/cabin-photo.jpeg";

				include('modules/graphic-dipytch.php');
				?>
		</content-three>

	</graphic-diptych>		

		<nav class='goals-resume'>
			<a href='resume.php'><button class='resume'>Resume</button></a>
			<a href='goals.php'><button class='goals'>Goals</button></a>
		</nav>
		</inner-column>
	</section>
	</body>
</html>
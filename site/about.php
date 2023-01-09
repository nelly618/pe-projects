<?php 
	include ('header.php');
?>

<style>
	about {
		display: block;
	}

	divider {
		margin-bottom: 20px;
	}

	.goals-resume {
		display: flex;
		flex-direction: row;
		justify-content: flex-start;
		gap: 40px;
		margin-left: 30px;
		padding: 20px;
	}

	.goals-resume a {
		text-decoration: small-caps;
	}

	.about-text {
		width: 100%;
	}

</style>

<main class='main-content'>
	<inner-column>
		<about>
			<h1>About Me</h1>
			<nav class='goals-resume'>
				<a href='resume.php'>Resume</a>
				<a href='goals.php'>Goals</a>
			</nav>
		</inner-column>
			<p class='about-text'>
				<inner-column>
				As a web developer, I work to provide design that is interactive, accessible, and attractive for users. <br>
				I have 7 years of experience in the healthcare sector, and have been a practicing PA since 2019. <br>
				While training with Perpetual Education, I continue to work with patients full-time and hope to work with a company that values experience that also provides a different perspective. <br>
				Outside of development and medicine, you can find me walking my dog, at the gym, watching some (not-so) trashy TV, looking for a new place to travel to, or trying new plant-based recipes.
				</inner-column>
			</p>
		</about>
</main>

		<footer>
			<?php 
				include ('footer.php');
			?>
		</footer>
	</body>
</html>
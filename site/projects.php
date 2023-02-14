<style>
	.samples h1 {
		margin: 0;
	}

	work-categories img {
		max-width: 800px;
		height: auto;
		opacity: .4;
	}

	work-categories img:hover {
		opacity: .8;
		transition: .2s all ease-in-out;
	}

	picture {
		max-width: 250px;
	}

	.RLG, .E4P {
		font-family: 'PP Eiko', sans-serif;
		color: #47505e;
		font-weight: 700;
		text-decoration: none;
	}

	.E4P {
		bottom: 250px;
	}
</style>

<?php 
	include ('header.php');
?>


	<main class='selected-projects'>
		<inner-column>
			<section class="rlg">
				<picture>
					<img src='https://www.peprojects.dev/alpha-5/chanelle/images/responsive-layout.jpeg' alt='garden image'>
				</picture>
				<h3>Responsive Layout Garden</h3>
				<p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Ea, maxime.</p>
			</section>
			


			<div class='samples'>
				<h1>Selected Work</h1>
				<work-categories>
					<a href='rlg.php'>
						<picture>
							
						</picture>
						<p class='RLG'>Responsive Layout Garden</p>
					</a>

					<a href='e4p.php'>
						<picture>
							<img src='https://www.peprojects.dev/images/portrait.jpg'>
						</picture>
						<p class="E4P">Exercises for Programmers</p>
					</a>

				</work-categories>
			</div>
		</inner-column>
	</main>

<?php 
	include ('footer.php');
?>

	</body>
</html>
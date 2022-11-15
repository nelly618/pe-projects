<html lang="en">
	<?php
		include('head.php');
		?>




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

	.RLG {
		font-family: 'PP Eiko', sans-serif;
		color: #47505e;
		font-weight: 700;
		position: relative;
		bottom: 180px;
		text-decoration: none;
	}
</style>

<body>
<header>
<?php 
	include ('header.php');
?>

</header>

	<main class='selected-projects'>
		<inner-column>
			<div class='samples'>
				<h1>Selected Work</h1>
				<work-categories>
					<a href='#'>
						<picture>
							<img src='https://www.peprojects.dev/alpha-5/chanelle/images/responsive-layout.jpeg' alt='garden image'>
						</picture>
						<p class='RLG'>Responsive Layout Garden</p></a>
				</work-categories>
			</div>
		</inner-column>
	</main>

	<footer>

<?php 
	include ('footer.php');
?>

		</footer>
	</body>
</html>
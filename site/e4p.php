<style>
	.logo {
			display: inline-block;
			width: 60px;
			height: auto;
		}

	img {
		width: 100%;
	}

	exercise-opener {
		display: flex;
		flex-direction: column;
		align-content: flex-start;
		gap: px;
	}

	exercise-opener h1 {
		font-size: 50px;
		margin-bottom: 0;
	}

	exercise-opener p, calculations p {
		font-size: 18px;
		margin-top: 0;
		color: black;
		text-align: left;
	}

	calculations {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
		gap: 0;
		margin: 0;
	}

</style>

<?php require('header.php')?>

<div>
	<inner-column>
		<exercise-opener>
			<h1>Exercises for Programmers</h1>
			<p>Challenges performed to develop coding skills</p>
		</exercise-opener>
	</inner-column>
</div>

<div>
	<inner-column>
		<calculations>
			<h2>Calculations</h2>
			<p>More complex formulas utilizing formulas for numerical conversions as well as some real-world financial programs.</p>

			<a href='projects/e4p/e4p-8.php'>Pizza Party</a>

			<a href='projects/e4p/e4p-10.php'>Self-Checkout</a>

			<a href='projects/e4p/e4p-12.php'>Simple Interest Calculator</a>
		</calculations>
	</inner-column>
</div>


<?php include('footer.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta property="og:title" content="[[enter title here]]">
	<meta property="og:type" content="[[enter type here]]">
	<meta property="og:url" content="[[enter URL here]]">
	<meta property="og:image" content="[[enter image here]]">
	<meta name="description" content="[[enter description here]]">
	<title>Document</title>

<!-- Twitter metadata!-->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="https://www.example.com/path/to/page.html">
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
	<meta name="twitter:image" content="https://www.example.com/path/to/image.jpg">

<!--CSS Reset!-->
  <link rel="stylesheet" href="../../../boilerplate/css/meyer-reset.css">
  <link rel="stylesheet" href="../../../boilerplate/css/setup.css">
  <link rel='stylesheet' href='style.css'>
</head>
	<body>
		<!-- HEADER -->
		<header class='page-header'>
			<inner-column>
				<nav class='nav-links'>
					<a href='#'>LOGO</a>
					<a href='#'>Some Page</a>
					<a href='#'>Some Other Page</a>
				</nav>
				<nav class='sign-in'>
					<a href='#'>Sign In</a>
				</nav>
			</inner-column>
		</header>

		<!-- MAIN CONTENT -->
		<main class='page-content'>
			<main-opener>
				<inner-column>
					<picture>
						<img src='https://peprojects.dev/images/square.jpg'>
					</picture>
					<opener-text>
						<h1>Hello! This is a 'dipytch'</h1>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores facere, temporibus non illum veniam, deserunt reprehenderit iste dolores! Placeat est voluptates numquam commodi vel deleniti quod autem aperiam quidem, neque.</p>
					</opener-text>
				</inner-column>
			</main-opener>

			<section class='CTA'>
				<inner-column>
					<?php include ('CTA.php');?>
				</inner-column>
			</section>

			<!-- GRID -->
			<section class='article-grid'>
				<inner-column>
					<article-opener>
						<h1>Article Opener</h1>
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Culpa saepe animi ipsum, asperiores amet laudantium consequuntur dolorem eaque quis natus corrupti, vel ducimus sit sunt eligendi minus voluptatibus. Ab, odit.</p>
					</article-opener>

					<article-grid>
						<?php include ('article.php');?>
					</article-grid>
				</inner-column>
			</section>

			<section class='CTA2'>
				<inner-column>
					<?php include ('CTA.php');?>
				</inner-column>
			</section>
		</main>

		<!-- FOOTER -->
		<footer class='site-footer'>
			<inner-column>
				<initial-footer>
					<h1>Footer Info</h1>
					<p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Laborum quasi unde voluptate delectus ratione.</p>
				</initial-footer>

				<footer-links>
					<nav class='page-links'>
						<a href='#'>LOGO</a>
						<a href='#'>Some Page</a>
						<a href='#'>Some Other Page</a>
					</nav>
					<nav class='signin'>
						<a href='#'>Sign In</a>
					</nav>
					<nav class='legal-links'>
						<a href='#'>Legal thing a</a>
						<a href='#'>Legal thing b</a>
					</nav>
					<nav class='social-links'>
						<a href='#'>social thing a</a>
						<a href='#'>social thing b</a>
						<a href='#'>social thing c</a>
						<a href='#'>social thing d</a>
					</nav>

				</footer-links>


			</inner-column>
		</footer>











































   </body>
</html>
<?php 
	// router
	$page = null;
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	} else {
		$page = "intro";
	}
?>
<head>
	<?php include('head.php');
	?>
</head>

<body>

	<header>

<?php 
	include ('header.php');
?>

	</header>

<main class='page-content'>
<?php 
	
	if ($page == 'intro') {
		include('intro.php');
	}
	if ($page == 'goals') {
		include('goals.php');
	}
	if ($page == 'projects') {
		include('projects.php');
	}
	if ($page == 'blog') {
		include('blog.php');
	}

?>
			


				<!-- <section id="work">
					<h1 class='project-title'>Projects</h1>

					<div class='work-display'>
						<picture class='wedding'>
							<a href='projects/wedding-project/index.html'><img src='https://www.peprojects.dev/alpha-5/chanelle/images/i-do-logo.png' alt='Sprint Project link'></a>
							<figcaption>Sprint Project - Wedding Planning Company</figcaption>
						</picture>
					</div>
				</section>
			</main>

		 -->
		 </main>
		 <footer>
		 	<?php 
			include ('footer.php');
			?>
		 </footer>
	</body>
</html>

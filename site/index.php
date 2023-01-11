<?php 
	// router
	$page = null;
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	} else {
		$page = "intro";
	}
?>
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
	if ($page == 'about') {
		include('about.php');
	}
	if ($page == 'projects') {
		include('projects.php');
	}
	if ($page == 'blog') {
		include('blog.php');
	}
	if ($page == 'resume') {
		include('resume.php');
	}
	if ($page == 'contact') {
		include('contact.php');
	}
	if ($page == 'goals') {
		include('goals.php');
	}

?>
		 </main>
		 <footer>
		 	<?php 
			include ('footer.php');
			?>
		 </footer>
	</body>
</html>

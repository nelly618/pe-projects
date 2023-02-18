<?php include('functions.php'); ?>

<?php include('header.php'); ?>

<?php 
	// router
	$page = null;
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	} else {
		$page = "intro";
	}
?>

<main class='page-content'>
<?php 
	
	if ($page == 'intro') {
		include('pages/intro.php');
	}
	if ($page == 'about') {
		include('pages/about.php');
	}
	if ($page == 'projects') {
		include('projects.php');
	}
	if ($page == 'blog') {
		include('blog.php');
	}
	if ($page == 'resume') {
		include('pages/resume.php');
	}
	if ($page == 'contact') {
		include('pages/contact.php');
	}
	if ($page == 'goals') {
		include('pages/goals.php');
	}

?>
		 </main>

		 <?php include('footer.php'); ?>

	</body>
</html>

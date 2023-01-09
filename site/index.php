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
	if ($page == 'about') {
		include('about.php');
	}
	if ($page == 'projects') {
		include('projects.php');
	}
	if ($page == 'blog') {
		include('blog.php');
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

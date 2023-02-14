<?php 
	// router
	$page = null;
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	} else {
		$page = "remake-1";
	}
?>

<?php 
	require ('header.php');
?>

<main class='page-content'>
<?php 
	
	if ($page == 'remake-1') {
		include('page-intro.php');

		include('video-section.php');

		include('article-section.php');

		include('review-section.php');
	}
	if ($page == 'remake-2') {
		include('about.php');
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

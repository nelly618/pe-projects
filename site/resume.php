	<?php include('header.php')?>

	<?php
	$json = file_get_contents('data/resume.json');
	$resumeData = json_decode($json, true);
	var_dump($resumeData)
?>

	<?php include('modules/resume-list')?>


	?>


<resume>
	<h1><?=$pageTitle?></h1>
	<inner-column>
		<section class="resume-text">
			<h2><?=$heading?></h2>
		</section>

		<section class="resume-text">
			<h2><?=$expertise?></h2>
		</section>
</resume>


		 	<?php include ('footer.php'); ?>
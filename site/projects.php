<?php 
	include ('header.php');
?>

<link rel='stylesheet' href='CSS/project-module.css'>

<?php
	$json = file_get_contents('data/projects.json');
	$projects = json_decode($json, true);
	?>

<?php 
	$title = $title ?? "generic title"; 
	$image = $image ?? "https://peprojects.dev/images/square.jpg";
	$link = $link ?? "https://outside.link";
	$description = $description ?? "Project description here. Project description here. Project description here.";
	?>
<main class="work-sections">
	<inner-column>
		<h1>Projects</h1>
		<section class="project-category">
		<?php foreach ($projects as $project) { ?>

		<?php include('modules/project-module.php');?>
		
		<?php } ?>
		</section>
	</inner-column>
</main>

<?php 
	include ('footer.php');
?>

	</body>
</html>
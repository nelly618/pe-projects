<?php
	$json = file_get_contents('../data/resume.json');
	$resumeData = json_decode($json, true);

	$title = $resumeData["pageTitle"];
	$intro = $resumeData["introduction"];
	$sections = $resumeData["sections"];
?>

<h1><?=$title?></h1>
		<?php foreach($sections as $section) { ?>
			<h2><?=$section["heading"]?></h2>
			<section class="resume-text">
					<?php foreach ($section["experiences"] as $education) { ?>
								<h3><?=$education["name"]?></h3>
								<h3><?=$education["time"]?></h3>
								<h4><?=$education["location"]?> | <?=$education["degree"]?></h4>
							<?php } ?>
			</section>

			<h2><?=$section["expertise"]?></h2>
			<section class="resume-text">
				<?php foreach ($section["qualities"] as $skill) { ?>
					<h3><?=$skill["category"]?>:</h3>
					<h4><?=$skill["subsection"]?></h4>
				
			</section>

	<?php }} ?>




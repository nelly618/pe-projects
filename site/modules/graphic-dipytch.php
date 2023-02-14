<?php 
	$paragraph = $paragraph ?? "Lorem ipsum dolor sit amet consectetur adipisicing, elit. Odit aspernatur cupiditate necessitatibus recusandae iste beatae!";
	?>

<?php
	$image = $image ?? "https://peprojects.dev/images/rectangle.jpg";

	$altText = $altText ?? "Image not available";

	?>


		<p><?=$paragraph?></p>
		<picture>
			<img src="<?=$image?>" alt="<?=$altText?>">
		</picture>


<?php

$imageCatalog = [

	'imageOne' => 'https://peprojects.dev/images/square.jpg',
	'imageTwo' => 'https://peprojects.dev/images/square.jpg',
	'imageThree' => 'https://peprojects.dev/images/square.jpg',
	'imageFour' => 'https://peprojects.dev/images/square.jpg']
	;
?>

<?php

$blankOne= '<img src=' . $imageCatalog['imageOne'] . 
'>';
$blankTwo= '<img src=' . $imageCatalog['imageTwo'] . 
'>';
$blankThree= '<img src=' . $imageCatalog['imageThree'] . 
'>';
$blankFour= '<img src=' . $imageCatalog['imageFour'] . 
'>';
?>


<image-column>
	<inner-column>
		<div class='images'>
			<picture>
				<?=$blankOne?>
			</picture>

			<picture>
				<?=$blankTwo?>
			</picture>
			
			<picture>
				<?=$blankThree?>
			</picture>
			
			<picture>
				<?=$blankFour?>
			</picture>
		</div>
	</inner-column>
</image-column>
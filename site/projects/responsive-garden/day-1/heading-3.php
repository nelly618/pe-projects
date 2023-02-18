<?php

$headingTwo = [
	"header" => 'Heading level 2 small',

	"text" => 'This is some body text. This is some body text. This is some body text. This is some body text.' ];


$headingThree = [

"header" => 'Heading level 3 small',

"text" => 'This is some body text. This is some body text. This is some body text. This is some body text.' ];

?>

<?php

$levelTwo = '<h2>' . $headingTwo['header'] . '</h2><p>' . $headingTwo['text'] . '</p>';

$levelThree = '<section><h3>' . $headingThree['header'] . 
'</h3><p>' . $headingThree['text'] . '</p></section>';

?>

<heading-two>
	<inner-column>
		<div class='section-one'>
			<?=$levelTwo?>
		</div>
	</inner-column>
</heading-two>	

<heading-three>
	<inner-column>
		<div class='section'>
			<?=$levelThree?>
			<?=$levelThree?>
			<?=$levelThree?>
			<?=$levelThree?>
			<?=$levelThree?>
			<?=$levelThree?>
		</div>
	</inner-column>
</heading-three>
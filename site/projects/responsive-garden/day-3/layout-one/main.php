<?php

	$levelThree = [

		"header" => "Heading level 3 small",

		"text" => "This is some body text. This is some body text. This is some body text. This is some body text." ]
		;
?>

<?php

	$headingThree = "<heading-three><div class='circle'></div><h3 class='strong-voice'>" . $levelThree['header'] . "</h3><p class='calm-voice'>" . $levelThree['text'] . "</p></heading-three>";
?>

<main class='main-content'>
	<inner-column>
		<level-three>
			<?=$headingThree?>
			<?=$headingThree?>
			<?=$headingThree?>
		</level-three>
	</inner-column>
</main>

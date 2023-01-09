<?php

	$levelThree = [

		"header" => "Heading level 3 large",

		"text" => "This is some body text. This is some body text. This is some body text. This is some body text." ]
		;
?>

<?php

	$headingThree = "<details>
		<summary>" . $levelThree['header'] . "</summary>
		<p class='calm-voice'>" . $levelThree['text'] . "</p></details><hr>";
?>

<main class='main-content'>
	<inner-column>
		<main-content>
			<content-one>
				<h5 class='calm-voice'>Little teaser</h5>
				<?=$headingThree?>
				<?=$headingThree?>
				<?=$headingThree?>
			</content-one>
			<content-two>
				<h5 class='calm-voice'>Little teaser</h5>
				<?=$headingThree?>
				<?=$headingThree?>
				<?=$headingThree?>
				<?=$headingThree?>
				<?=$headingThree?>
				<?=$headingThree?>
				<?=$headingThree?>
				<?=$headingThree?>
			</content-two>
		</main-content>
	</inner-column>
</main>

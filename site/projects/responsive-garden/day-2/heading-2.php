<?php
	$headingThree = [
		"header" => 'Heading level 3 small',

		"text" => 'This is some body text. This is some body text. This is some body text. This is some body text.']
		;

		?>

<?php

$levelThree = "<h3 class='strong-voice'>" . $headingThree['header'] . "</h3> <p class='calm-voice'>" . $headingThree['text'] . "</p>";
?>	


	<section-one>
		<inner-column>
			<div class='main-content'>
				<heading-two>
					<h5 class='calm-voice'>
						Little teaser
					</h5>
					<h2 class='loud-voice'>
						Heading level 2 small
					</h2>
					<p class='intro-voice'>
						This is some body text. This is some body text. This is some body text. This is some body text.
					</p>
				</heading-two>

				<div class='heading-three'>
					<heading-three>
						<shapes>
							<span class='circle'></span>
							<span class='square'></span>
						</shapes>
						<div class='second-header'>
							<?=$levelThree?>
						</div>
					</heading-three>

					<heading-three>
						<shapes>
							<span class='circle'></span>
							<span class='square'></span>
						</shapes>
						<div class='second-header'>
							<?=$levelThree?>
						</div>
					</heading-three>

					<heading-three>
						<shapes>
							<span class='circle'></span>
							<span class='square'></span>
						</shapes>
						<div class='second-header'>
							<?=$levelThree?>
						</div>
					</heading-three>

					<heading-three>
						<shapes>
							<span class='circle'></span>
							<span class='square'></span>
						</shapes>
						<div class='second-header'>
							<?=$levelThree?>
						</div>
					</heading-three>
				</div>	
			</div>
		</inner-column>
	</section-one>

	<section-two>
		<inner-column>
			<p class='calm-voice'>
				This is some body text. This is some body text. This is some body text. This is some body text.
			</p>
		</inner-column>
	</section-two>
	
</body>
</html>




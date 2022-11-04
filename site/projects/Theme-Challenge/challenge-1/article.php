<?php
	$articleOne = [
		"h1" => "Article Title",
		"p" => "Little info to understand if this is an article you would like to read",
		"button" => "Click Me"
	];

	$articleTwo = [
		"h1" => "Article Title",
		"p" => "Little info to understand if this is an article you would like to read",
		"button" => "Click Me"
	];

	$articleThree = [
		"h1" => "Article Title",
		"p" => "Little info to understand if this is an article you would like to read",
		"button" => "Click Me"
	];

	$articleFour = [
		"h1" => "Article Title",
		"p" => "Little info to understand if this is an article you would like to read",
		"button" => "Click Me"
	];

	$articleFive = [
		"h1" => "Article Title",
		"p" => "Little info to understand if this is an article you would like to read",
		"button" => "Click Me"
	];

	$articleSix = [
		"h1" => "Article Title",
		"p" => "Little info to understand if this is an article you would like to read",
		"button" => "Click Me"
	];

	$articles = [$articleOne, $articleTwo, $articleThree, $articleFour, $articleFive, $articleSix];
		echo "<subsection class='grid'>";
	foreach ($articles as $article) {

		echo
		"<article><h1>" . 
		$article["h1"] . "
		</h1><p>" . 
		$article["p"] . "
		</p><button><a href='#'>" . 
		$article["button"] . "
		</a></button></article>";

	}

		echo "</subsection>";





	?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<style>
	*{
		box-sizing: border-box;
		font-family: avenir;
	}

	body {
		min-height: 100vh;
		margin: 0;
	}

	.inner-column {
		width: 98%;
		max-width: 650px;
		display: block;
		margin-right: auto;
		margin-left: auto;
	}

	monster-card {
		display: inline-block;
		width: 350px;
		padding: 30px;
		margin-bottom: 15px;
		vertical-align: middle;
	}

/*	.flex {
		display: flex;
		flex-direction: row;
		align-items: center;
		flex-wrap: wrap;
		justify-content: center;
	}
*/
	.monster-profile {
		display: block;
		max-width: 300;
		height: auto;
		border-radius: 50%;
	}

	img {
		width: 100%;
	}

	h1 {
		font-size: 60px;
		text-align: center;
		line-height: 1.2;
		letter-spacing: .03em;
		font-weight: 700;
	}

	h2 {
		font-size: 30px;
		font-weight: 500;
		line-height: 1.3;
	}


</style>

<h1>Monster Adoptions</h1>


<?php
	
	$shadow = [
		"id" => 174,
		"name" => "Shadow",
		"favoriteFood" => "chicken",
		"age" => 12,
		"color" => "purple",
		"adopted" => false,
		"image" => 'https://peprojects.dev/alpha-5/chanelle/images/monster/shadow.jpg'
	];

	$lima = [
		"id" => 7304,
		"name" => "Limabean",
		"favoriteFood" => "Lima beans",
		"age" => 5,
		"color" => "green",
		"adopted" => false,
		"image" => 'https://peprojects.dev/alpha-5/chanelle/images/monster/limabean.jpg'
	];

	$fragoo = [
		"id" => 836,
		"name" => "Fragoo",
		"favoriteFood" => "pasta",
		"age" => 8,
		"color" => "pink",
		"adopted" => false,
		"image" => 'https://peprojects.dev/alpha-5/chanelle/images/monster/fragoo.jpg'
	];

	$orangina = [
		"id" => 9636,
		"name" => "Orangina",
		"favoriteFood" => "tangerine",
		"age" => 3,
		"color" => "orange",
		"adopted" => false,
		"image" => 'https://peprojects.dev/alpha-5/chanelle/images/monster/orangina.jpg'
	];

	$banana = [
		"id" => 940,
		"name" => "Mr. Banana",
		"favoriteFood" => "banana",
		"age" => 7,
		"color" => "yellow",
		"adopted" => false,
		"image" => 'https://peprojects.dev/alpha-5/chanelle/images/monster/mr-banana.jpg'
	];

	$reads = [
		"id" => 5205,
		"name" => "Miss Reads-a-lot",
		"favoriteFood" => "apple",
		"age" => 5,
		"color" => "blue",
		"adopted" => false,
		"image" => 'https://peprojects.dev/alpha-5/chanelle/images/monster/miss-reads-a-lot.jpg'
	];

	$codey = [
		"id" => 7264,
		"name" => "Codey",
		"favoriteFood" => "Mountain Dew Code Red",
		"age" => 1,
		"color" => "red",
		"adopted" => true,
		"image" => 'https://peprojects.dev/alpha-5/chanelle/images/monster/codey.jpg'
	];

	$monsters = [$shadow, $lima, $fragoo, $orangina, $banana, $reads, $codey];

	foreach ($monsters as $monster) {

		if ($monster["adopted"] == 1) {
			$monster["adopted"] = "ADOPTED!";
			} else {
				$monster["adopted"] = "This monster needs a home!";
		}

		echo 
		"<monster-card><div class='inner-column'><h2><strong>" . 
			$monster["name"] . "
			</strong></h2>
		<picture class='monster-profile'>
			<img src='" . 
			$monster["image"] . "'>
		</picture>
		<ul><li> 
			Favorite food: " . 
			$monster["favoriteFood"] . "
		</li>
		<li>Age: " . 
			$monster["age"] . "
		</li>
		<li>Color: " . 
			$monster["color"] . "
		</li>
		<li>ID: " . 
			$monster["id"] . "
		</li>
		<li> Status: " . 
			$monster["adopted"] . "
		</li></ul></div></monster-card>";

	}


	?>








</body>
</html>







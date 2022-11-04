
<?php
	$myDog = ["small", 11, "black", "curly", 15];
	echo "I have a puppy who is " . $myDog[0] . " and " . $myDog[1] . " months old named Sammy.";

	$shadow = [
		"id" => 174,
		"name" => "Shadow",
		"favoriteFood" => "chicken",
		"age" => 12,
		"color" => "purple",
		"adopted" => false,
	];

	$lima = [
		"id" => 7304,
		"name" => "Limabean",
		"favoriteFood" => "Lima beans",
		"age" => 5,
		"color" => "green",
		"adopted" => false,
	];

	$fragoo = [
		"id" => 836,
		"name" => "Fragoo",
		"favoriteFood" => "pasta",
		"age" => 8,
		"color" => "pink",
		"adopted" => false,
	];

	$monsters = [$shadow, $lima, $fragoo];

	foreach ($monsters as $monster) {
		echo "<br><p><strong>" . $monster["name"] . "</strong></p><ul><li> Favorite food: " . $monster["favoriteFood"] . "</li><li>Age: " . $monster["age"] . "</li><li>Color: " . $monster["color"] . "</li><li>ID: " . $monster["id"] . "</li></ul>";
	};

	$dogBreeds = ["Bulldog", "Pitbull", "Poodle", "Cavapoo", "Terrier", "German Shepherd"];

	foreach ($dogBreeds as $breed) {
		echo "<p>" . $breed . "</p>";
	};

	?>


		<p id = <?=$shadow["id"]?>> We have a new monster! His name is <?=$shadow["name"]?> and you can often find him eating his favorite food, <?=$shadow["favoriteFood"]?>! He is <?=$shadow["age"]?> years old. If interested in learning more, please contact us.</p>




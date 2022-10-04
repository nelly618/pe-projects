



<?php 
	function adoption($name, $age, $favFood, $color) {
		echo "<h2>Monster</h2>";

		echo "<ol>";
			echo "<li>" . $name . "</li>";
			echo "<li>" . $age . "</li>";
			echo "<li>" . $favFood . "</li>";
			echo "<li>" . $color . "</li>";
		echo "</ol>";
	}

		adoption("Codey", 4, "Mountain Dew Code Red", "red");
		adoption("Limabean", 8, "lima beans", "green");
		adoption("Mr. Banana", 7, "banana", "yellow");
		adoption("Orangina", 5, "oranges", "orange");
		
			
function monsterGenerator($name, $age, $favFood) {
	$monster = [
		"name" => $name,
		"age" => $age,
		"favFood" => $favFood,
	];
	return $monster;
}

	$crunchy = monsterGenerator("Crunchy", 6, "peanut butter");

	echo $crunchy["name"];





?>




































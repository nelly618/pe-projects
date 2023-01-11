<?php

	$endWeek = [
		'title' => "End of Week",

		'goalOne' => "Be sure I understand the concepts from the week",

		'goalTwo' => "Update my published sites with new techniques learned",

		'goalThree' => "Meet with my mentor and different classmates to discuss current lessons",
	];

	$endMonth = [
		'title' => "End of Month",

		'goalOne' => "Continue to improve my ability to create graphics",

		'goalTwo' => "Be more confident with the use of php and functions utilized",

		'goalThree' => "Be comfortable with WordPress",

		'goalFour' => "Incorporate Javascript into my current work",
	];

	$endCourse = [
		'title' => "End of Course",

		'goalOne' => "Confidence in my abilities to provide clean, intuitive design",

		'goalTwo' => "Obtain an entry to mid-level position as a Product Designer",

		'goalThree' => "Make above 100k",

		'goalFour' => "Continue learning new skills to maintain ease of experience for the user",
	];

	$fiveYear = [
		'title' => "Five-Year Plan",

		'goalOne' => "Work in a remote position",

		'goalTwo' => "Over 200K compensation",

		'goalThree' => "WLB that allows me to work from any location (including traveling)",
	];


	$goals = [$endWeek, $endMonth, $endCourse, $fiveYear];

	if ( isset($goalFour) ) {
		display;}

	foreach ($goals as $goal) {
		
		echo 
		"<goal><h2 class='goal-title'>" . $goal['title'] . "
		</h2><hr><ul><li>" . $goal['goalOne'] . "
		</li><li>" . $goal['goalTwo'] . "
		</li><li>" . $goal['goalThree'] . "
		</li><li>" . $goal['goalFour'] . "
		</li></ul></goal>"

		;
	}


?>


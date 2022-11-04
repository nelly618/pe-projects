<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<header>header</header>



<?php
	$firstName = "Jasmin";
	$lastName = "Robin";
	$fullName = "$firstName $lastName";
	$profession = "pre-med student";
	$adjective = "dedicated";
	$noun = "provider";


	echo "<p> Hello, " . $fullName . ".</p>";

	echo "<p> Hello, my name is " . $fullName . " and I'm a " . $profession . ". Unlike others I am " . $adjective . " to my studies to become a top-tier " . $noun . ".</p>";


	$numberOne = 557;
	$numberTwo = 8356;
	$url = "https://www.google.com";


	echo "<p>" . $numberTwo . ". </p><br>";
	echo "Sum: " $numberOne + $numberTwo;

	echo "<p> Today, we have " . $numberTwo . " " . $noun . "s.</p>";

	echo "<p>" . $adjective . "" . $noun . "<p>";

	echo "<a href='" . $url . "'>ask</a> <br>";

	echo $numberOne;



	?>


<footer>footer</footer>

</body>
</html>

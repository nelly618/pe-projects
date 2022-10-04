<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

	
	

	$dog = [
		"name" => "Sammy",
		"breed" => "Cavapoo",
		"deceased" => false,
		"age" => 1,
		"weight" => 15,
		"color" => "black",
	];

	echo $dog[name];

?>




<p> I have a dog named <?=$dog["name"]?>. He is a <?=$dog["breed"]?> and is <?=$dog["age"]?> years old.</p>
















</body>
</html>

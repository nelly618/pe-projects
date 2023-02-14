function roomArea() {
	var length = prompt('What is the length of the room in feet?');
	var width = prompt('What is the width of the room in feet?');
	var dimensions = "You entered dimensions of " + length + " feet by " + width + " feet.";
	alert(dimensions);

	var squareFeet = (+length * +width);
	var squareMeters = (+squareFeet * +.09290304);

	var totalArea = "The area is " + squareFeet + " square feet and " + squareMeters + " square meters.";

	alert(totalArea);
}

roomArea();

function paintCal() {
	var length = prompt('What is the length of the room in feet?');
	var width = prompt('What is the width of the room in feet?');
	var squareFeet = (+length * +width);

	var can = 350;

	var gallons = Math.ceil((+squareFeet / +can));

	var cansNeeded = "You will need " + gallons + " gallons of pain to cover " + squareFeet + " square feet.";

	alert(cansNeeded);
}

paintCal();
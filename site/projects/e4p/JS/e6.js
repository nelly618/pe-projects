function retirementCalculator() {
	var currentAge = prompt('What is your current age?');
	var retirementAge = prompt('At what age would you like to retire?');
	var yearsLeft = (+retirementAge - +currentAge);
	var messageOne = "You have " + yearsLeft + " years left until you can retire.";
	alert(messageOne);

	var retirementYear = (+2023 + +yearsLeft);
	var messageTwo = "It is 2023, so you can retire in " + retirementYear + ".";
	alert(messageTwo);
}

retirementCalculator();
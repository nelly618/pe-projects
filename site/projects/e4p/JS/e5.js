function simpleMath() {
	var firstNumber = prompt('What is the first number?');
	var secondNumber = prompt('What is the second number?');
	var sum = console.log(+firstNumber + +secondNumber);
	var subtraction = console.log(firstNumber - secondNumber);
	var multiply = console.log(firstNumber * secondNumber);
	var divide = console.log(firstNumber/secondNumber);
	
	var addMessage = firstNumber + ' + ' + secondNumber + ' = ' + sum;
	var subtractMessage = firstNumber + ' - ' + secondNumber + ' = ' + subtraction;
	var multMessage = firstNumber + ' * ' + secondNumber + ' = ' + multiply;
	var divideMessage = firstNumber + ' / ' + secondNumber + ' = ' + divide;

	alert(addMessage);
	alert(subtractMessage);
	alert(multMessage);
	alert(divideMessage);

};

simpleMath();
function characterCount() {
var input = prompt('What is the input string?');
var amount = input.length;
var message = input + ' has ' + amount + ' characters.';
alert(message);
};

characterCount();
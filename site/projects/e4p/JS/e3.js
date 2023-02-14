function authorQuote() {
var quote = prompt('What is the quote');
var author = prompt('Who said it?');
var message = author + ' says, "' + quote + '."';
alert(message);
};

authorQuote();
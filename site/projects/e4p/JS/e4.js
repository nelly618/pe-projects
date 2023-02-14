function madlib() {
	var noun = prompt('Enter a noun');
	var verb = prompt('Enter a verb');
	var adverb = prompt('Enter an adverb');
	var adjective = prompt('Enter an adjective');
	var message = 'Do you ' + verb + ' your ' + adjective + ' ' + noun + ' ' + adverb + '? That is hilarious!';
	alert(message);
}

madlib();
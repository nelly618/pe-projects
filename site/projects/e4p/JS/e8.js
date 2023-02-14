<html>
<style>
		body {
	padding: 20px;
}

		form, field {
			display: grid;
			justify-content: start;
		}

		form {
			gap: 20px;
		}

		field.text input {
			font: inherit;
			padding: .5em 1em;
		}

		output {
			display: block;
			padding: 20px;
			background-color: black;
			color: lime;
			font-family: monospace;
			margin-top: 40px;
		}

		output:empty {
			display: none;
		}
	</style>

	<body>
		<header>
			<h1>Pizza Party</h1>
		</header>
		<form>
			<field class='text'>
				<label for='people'>How many people are coming to the party?</label>
				<input id='people' type='text'>
			</field>

			<field class='text'>
				<label for='pizzas'>How many pizzas do you have?</label>
				<input id='pizzas' type='text'>
			</field>

			<button type='submit'>Enter</button>
		</form>

		<output></output>
	</body>

	<script>

		var form = document.querySelector('form');
		var input1 = people.querySelector('input');
		var input2 = pizzas.querySelector('input');
		var outlet = document.querySelector('output');

		form.addEventListener('submit', 


function pizzaParty() {
	var people = prompt('How many people?');
	var pizzas = prompt('How many pizzas do you have?');

	var setup = people + " people with " + pizzas + " pizzas.";
	var slices = (+pizzas * +8);
	var perPerson = (+slices / +people);
	var allSlices = (+people * +perPerson);
	var leftover = (+slices - +allSlices);

	alert(setup);

	var pizzaSlices = "Each person gets " + perPerson + " pieces of pizza.";
	alert(pizzaSlices);

	var leftSlices = "There are " + leftover + " leftover pieces.";

	alert(leftSlices);
}

pizzaParty();

</script>
</html>

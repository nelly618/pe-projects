function selfCheckout() {
	var item1 = prompt('Enter the price of item 1');
	var quantity1 = prompt('Enter the quantity of item 1');
	var item2 = prompt('Enter the price of item 2');
	var quantity2 = prompt('Enter the quantity of item 2');
	var item3 = prompt('Enter the price of item 3');
	var quantity3 = prompt('Enter the quantity of item 3');

	var total1 = (+item1 * +quantity1);
	var total2 = (+item2 * +quantity2);
	var total3 = (+item3 * +quantity3);

	var subtotal = (+total1 + +total2 + +total3);
	var tax = (+subtotal * +.055);
	var total = (+subtotal + +tax);

	var subMessage = "Subtotal: " + subtotal;
	var taxMessage = "Tax: " + tax;
	var totalMessage = "Total: " + total;

	alert(subMessage);
	alert(taxMessage);
	alert(totalMessage);
}

selfCheckout();
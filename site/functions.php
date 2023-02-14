<?php 

function enableErrorReporting() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
enableErrorReporting();

function show($things) {
	echo "<code class='show-code'>";
		echo '<pre>';
			print_r($things);
		echo '</pre>';
	echo '</code>';
}

?>
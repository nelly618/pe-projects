<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta property="og:title" content="Wig Plaza:">
		<meta property="og:type" content="website">
		<meta property="og:url" content="[[enter URL here]]">
		<meta property="og:image" content="[[enter image here]]">
		<meta name="description" content="[[enter description here]]">
		<title><?php echo wp_get_document_title(); ?></title>

	<!--CSS Reset!-->
	  <link rel="stylesheet" href="style.css">
	  <?php wp_head(); ?>
</head>

<body class='<?php body_class();?>'>
	<header>
		<inner-column>
			<div class='site-top'>
				<h3><a href='home.php'>Wig Plaza</a></h3>
				<nav>
					<a href='#'>About</a>
					<a href='#'>New</a>
					<a href='#'>Sales</a>
				</nav>
			</div>
		</inner-column>
	</header>
	
	<main class='page-content'>
		<inner-column>
			<h1>Wig Plaza</h1>
			<h4><em>Your one-stop shop for your wig needs</em></h4>
		</inner-column>
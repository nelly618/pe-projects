<?php include('show-data.php');?>

<?php 
	if ( isset($_GET["show"]) ) {
		$this_show_id = $_GET['show'];
	}
	

foreach ($show_data as $show) { 
	if ($this_show_id == $show["id"] ) {
		$detail = $show;
		}
	}
?>

<?php if (isset($detail) ) { ?>	
	
	<h1><?=$detail["title"];?></h1>
	<inner-column>
		<picture>
			<img src="<?=$detail["image"];?>" alt="Show Image">
		</picture>

		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis harum vel et, asperiores libero, commodi quod explicabo ad labore, accusantium maiores temporibus dolorem inventore sunt. Quos temporibus repudiandae tempore aut?</p>

	</inner-column>

<?php } else {?>

	<h1>No show found</h1>

	<p>Check the list for more shows <a href="?page=list">here!</a></p>

	<?php } ?>
<?php include('show-data.php');?>

<style>
	.image {
		max-width: 400px;
	}

	.image + .title {
		margin-top: 10px;
	}

</style>

<h1 class='list'>Anime Shows</h1>
<grid-setup>
	<inner-column>
		<ul>
			<?php foreach ($show_data as $show) { ?>
				<li class='show'>
					<showcard>
						<picture class='image'><img src='<?=$show["image"];?>'></picture>
						<h2 class='title'>Title: <?=$show["title"];?></h2>
						<h3 class='genre'>Genre: <?=$show["genre"];?></h3>
						<h4 class='Arc'>Arc: <?=$show["Arc"];?></h4>
						<a href="?page=detail&show=<?=$show["id"]?>">Take a peek!</a>
					</showcard>
				</li>

			<?php } ?>
			
		</ul>

	</inner-column>
</grid-setup>
<project-spotlight class= "<?=$project['classification']?>">
		<figure>
			<picture>
				<img src="<?=$project['image']?>" alt="<?=$project['altText']?>">
			</picture>
		</figure>
	<section class="extra-info">
		<project-title><?=$project['title']?></project-title>
		<p class="description"><?=$project['description']?></p>
		<a href="<?=$project['link']?>">Link to project here</a>
	</section>
</project-spotlight>
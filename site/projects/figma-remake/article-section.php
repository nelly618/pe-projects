<?php include('article-list.php');?>

<section class='article-section'>
	<inner-column>
		<article-section>
			<article-header>
				<h1>Etiam nulla lectus molestie at vulputate.</h1>

				<p>Neque, pulvinar vestibulum non aliquam.</p>

				<picture>
					<img src='https://peprojects.dev/images/square.jpg'>
				</picture>
			</article-header>

			<article-list>
				<?php foreach ($article_list as $article) { ?>
					<div>
						<number><?=$article["id"];?></number>

						<more-info>
							<h1 class='title'><?=$article["title"];?></h1>
							<h3 class='subsection'><?=$article["subsection"];?></h3>
						</more-info>
					</div>

			<?php } ?>

			</article-list>
		</article-section>
		
	</inner-column>
</section>
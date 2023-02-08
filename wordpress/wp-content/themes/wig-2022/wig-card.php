
<wig-card>
	<inner-column>
		<div class='list-opener'>
			<name-image>
				<h2 class='type'><?php the_field('name'); ?></h2>
				<img src='<?php wp_get_attachment_image('image');?>'>
			</name-image>
			<description>
				<p><?php the_field('description'); ?></p>
				<h3 class='length'>Length: <?php the_field('length'); ?> inches</h3>

				<a href='<?php the_permalink(); ?>'>Read more</a>
			</description>
		</div>

	</inner-column>
</wig-card>



<?php get_header(); ?>


<?php 
	if ( is_page('home') ) {
		echo "<h1>Home</h1>";
		}

	if ( is_page('list') ) {
			$parameters = array(  
			  'post_type' => 'wigs',
			);

			$query = new WP_Query( $parameters ); 
			  
			while ( $query->have_posts() ) : $query->the_post(); 
			  include('templates/components/wig-card.php'); 
			endwhile;

			wp_reset_postdata(); 
		}

		if ( is_singular('wigs') ) {
			echo "<h1>" . the_field('name') . "</h1>";
		}

	?>


<?php get_footer(); ?>


<?php get_header(); ?>


<?php $page = null;
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	} else {
		$page = "home";
	}

	?>

<?php 
	if ( is_page('home') ) {
		include('home');
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

	if ( is_404() ) {
		include ('page-not-found.php');
	}

	?>


<?php get_footer(); ?>
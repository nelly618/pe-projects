<?php

wp_enqueue_style( 'style', get_stylesheet_uri() );

// Disable WP Admin bar for all users 
add_filter( 'show_admin_bar', '__return_false');
?>
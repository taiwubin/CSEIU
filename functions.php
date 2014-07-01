<?php

if (current_user_can('manage_options')):
    show_admin_bar(true);
else:
    show_admin_bar(false);
endif;

register_nav_menus(array(
    'primary' => __('Top Navigation Menu', 'HCMIU'),
    'secondary' => __('Explore Menu', 'HCMIU'),
    'third'=> __('Quick Links Menu', 'HCMIU')
));

// Enable support for Post Thumbnails, and declare two sizes.
add_theme_support( 'post-thumbnails' );
add_image_size( 'entry-size', 900, 0, true );
add_image_size( 'mini-size', 280, 0, true );
add_image_size( 'tiny-size', 120, 120, false );

register_sidebar(array(
    'name' => 'Primary Footer Widgets',
    'id' => 'primary-footer-widgets',
    'description' => 'Place widgets for the Left-area Footer here',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));

register_sidebar(array(
    'name' => 'Secondary Footer Widgets',
    'id' => 'secondary-footer-widgets',
    'description' => 'Place widgets for the Right-area Footer here',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));

function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '[...]';
	} else {
		echo $excerpt;
	}
}


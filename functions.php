<?php

add_theme_support('post-thumbnails');
$custom_header_args = array(
  'default-text-color' => 'ffffff'
);
add_theme_support('custom-header', $custom_header_args);

function ennis_create_widget( $name, $id, $description) {
	register_sidebar(array(
		'name' => __($name),
		'id' => $id,
		'description' => __($description),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>'
	));
}
ennis_create_widget( 'About Widget', 'page', 'Add information additonal to your bio' );

// Stylesheet Imports
function ennis_theme_styles() {
  wp_enqueue_style('googlefont_css', 'https://fonts.googleapis.com/css?family=Dosis:400,300,700');
  wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'ennis_theme_styles');

?>

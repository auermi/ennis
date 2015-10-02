<?php

add_theme_support('post-thumbnails');

// Stylesheet Imports
function ennis_theme_styles() {
  wp_enqueue_style('googlefont_css', 'https://fonts.googleapis.com/css?family=Dosis:400,300,700');
  wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'ennis_theme_styles');


?>

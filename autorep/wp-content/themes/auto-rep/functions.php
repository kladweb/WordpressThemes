<?php
add_action('wp_enqueue_scripts', 'autorep_scripts');

function autorep_scripts() {
  wp_enqueue_style('colors-style', get_template_directory_uri() . '/assets/css/colors.css');
  wp_enqueue_style('autorep-style', get_stylesheet_uri());
  wp_enqueue_script('autorep-scripts', get_template_directory_uri() . '/assets/js/modal.js', array(), null, true);
  wp_enqueue_script('autorep-scripts', get_template_directory_uri() . '/assets/js/scroll-up.js', array(), null, true);
};
?>
<?php
  add_theme_support( 'custom-logo' );
  add_action('wp_enqueue_scripts', 'autorep_scripts');

  function autorep_scripts() {
    wp_enqueue_style('colors-style', get_template_directory_uri() . '/assets/css/colors.css');
    wp_enqueue_style('autorep-style', get_stylesheet_uri());

    if (is_front_page()) {
      wp_enqueue_style('services-style', get_template_directory_uri() . '/assets/css/main.css');
    }

    if (is_page('services')) {
      wp_enqueue_style('services-style', get_template_directory_uri() . '/assets/css/services.css');
    }

    if (is_page('about')) {
      wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/css/about.css');
    }
    
    wp_enqueue_script('autorep-scripts', get_template_directory_uri() . '/assets/js/modal.js', array(), null, true);
    wp_enqueue_script('autorep-scripts', get_template_directory_uri() . '/assets/js/scroll-up.js', array(), null, true);
  };

/*
  function pageabout_styles() {
                ?>
<script type="text/javascript">
alert('Inside specific page');
</script>
<?php 
  }
*/

?>
<?php
  add_theme_support( 'custom-logo' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'menus' );
  add_action('wp_enqueue_scripts', 'autorep_scripts');

  function autorep_scripts() {
    wp_enqueue_style('colors-style', get_template_directory_uri() . '/assets/css/colors.css');
    wp_enqueue_style('autorep-style', get_stylesheet_uri());

    if (is_front_page()) {
      wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
    }

    if (is_page('services')) {
      wp_enqueue_style('services-style', get_template_directory_uri() . '/assets/css/services.css');
    }

    if (is_page('about')) {
      wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/css/about.css');
    }

    if (is_page('towing')) {
      wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/css/towing.css');
    }

    if (is_page('articles')) {
      wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/css/articles.css');
    }

    if (is_page('vacancies')) {
      wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/css/vacancies.css');
    }

    if (is_page('contacts')) {
      wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/css/contacts.css');
    }
    
    wp_enqueue_script('autorep-scripts', get_template_directory_uri() . '/assets/js/modal.js', array(), null, true);
    wp_enqueue_script('scroll-scripts', get_template_directory_uri() . '/assets/js/scroll-up.js', array(), null, true);

    if (is_page('towing')) {
      wp_enqueue_script('scroll-parallax', get_template_directory_uri() . '/assets/js/parallax.js', array(), null, true);
    }

    if (is_page('articles')) {
      wp_enqueue_script('scroll-show-cont', get_template_directory_uri() . '/assets/js/show-cont.js', array(), null, true);
    }
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

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);

function filter_nav_menu_link_attributes($atts, $item, $args) {
  if ($args->menu === 'Main') {
    $atts['class'] = 'main-nav__link';

    if ($item->current) {
      $atts['class'] .= ' main-nav__link-active';
    }
  };
  return $atts;
}


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
    $classes[] = 'main-nav__item';
    return $classes;
}


add_filter('wp_nav_menu_items', 'add_custom_menu_button', 10, 2);

function add_custom_menu_button($items, $args) {
    if ($args->menu === 'Main') {
        $label = get_field('menu_button_label', 2) ?: 'Связаться с нами';
        $items .= '<li class="main-nav__item main-nav__item-button">';
        $items .= '<button class="button-typical main-nav__button">' . esc_html($label) . '</button>';
        $items .= '</li>';
    }
    return $items;
}

?>
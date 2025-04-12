<?php
/*
Template Name: Наши услуги
*/
?>

<?php
get_header();
?>

<div class="page-header">
  <div class="content">
    <span><a class="page-header__home" href="../index.html">Главная</a></span>
    <span class="page-header__sep">/</span>
    <span class="page-header__title">Наши услуги</span>
    <h1 class="page-header__name">Наши услуги</h1>
  </div>
</div>
<main>
  <section id="services">
    <div class="content serv-items">
      <?php 
        $my_posts = get_posts( array(
          'numberposts' => -1,
          'category_name' => 'services',
          'orderby'     => 'date',
          'order'       => 'ASC',
          'post_type'   => 'post',
          'suppress_filters' => true,
        ) );

          global $post;

          foreach( $my_posts as $post ) {
            setup_postdata( $post );
            $image = get_field('service_img');
        ?>
      <div class="serv-item">
        <div class="serv-item__rectangle">
          <img class="serv-item__picture" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
            title="<?php echo $image['alt']; ?>">
        </div>
        <h2 class="serv-item__name"><?php the_title() ?></h2>
        <p class="serv-item__description"><?php the_field('service_descr') ?></p>
      </div>
      <?php
          }
          wp_reset_postdata();
      ?>
    </div>
  </section>
</main>

<?php
get_footer();
?>
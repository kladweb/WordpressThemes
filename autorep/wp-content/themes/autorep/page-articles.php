<?php
/*
Template Name: Статьи
*/
?>

<?php
get_header();
?>

<div class="page-header">
  <div class="content">
    <span><a class="page-header__home" href="/">Главная</a></span>
    <span class="page-header__sep">/</span>
    <span class="page-header__title">Статьи</span>
    <h1 class="page-header__name">Статьи</h1>
  </div>
</div>
<div class="content container-flex">
  <aside class="popular">
    <h2 class="popular-head">Популярные статьи</h2>

    <?php 
        $my_posts = get_posts( array(
          'numberposts' => -1,
          'category_name' => 'article',
          'orderby'     => 'date',
          'order'       => 'ASC',
          'post_type'   => 'post',
          'suppress_filters' => true,
        ) );

          global $post;

          foreach( $my_posts as $post ) {
            setup_postdata( $post );
            $image = get_field('article_img');
            ?>

    <div class="popular__title">
      <a class="popular__link" href="#<?php the_field('article_id') ?>" title="<?php the_title() ?>">
        <img class="popular__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
      </a>
      <a class="popular__item" href="#<?php the_field('article_id') ?>">
        <span><?php the_title() ?></span>
      </a>
    </div>

    <?php
      }
      wp_reset_postdata();
    ?>
  </aside>
  <main class="blogs">
    <?php 
        $my_posts = get_posts( array(
          'numberposts' => -1,
          'category_name' => 'article',
          'orderby'     => 'date',
          'order'       => 'ASC',
          'post_type'   => 'post',
          'suppress_filters' => true,
        ) );

          global $post;

          foreach( $my_posts as $post ) {
            setup_postdata( $post );
            $image = get_field('article_img');
            ?>

    <article id="<?php the_field('article_id') ?>" class="article">
      <img class="article__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
        title="<?php the_title() ?>">
      <h2 id="<?php the_field('article_id') ?>head" class="article__title"><?php the_field('article_name') ?></h2>
      <p class="article__description"><?php the_field('article_text_start') ?></p>
      <a class="button-typical button-show" role="button" href="#<?php the_field('article_id') ?>head">Подробнее</a>
      <div class="hide-content close">
        <?php 
          $subtitle1 = get_field('subtitle1');
          if (!empty($subtitle1)): ?>
        <h3 class="article__subtitle"><?php echo $subtitle1 ?></h3>
        <?php endif;
        ?>
        <?php 
          $subarticle1 = get_field('subarticle1');
          if (!empty($subarticle1)): ?>
        <p class="article__description"><?php echo $subarticle1 ?></p>
        <?php endif;
        ?>
        <?php 
          $subtitle2 = get_field('subtitle2');
          if (!empty($subtitle2)): ?>
        <h3 class="article__subtitle"><?php echo $subtitle2 ?></h3>
        <?php endif;
        ?>
        <?php 
          $subarticle2 = get_field('subarticle2');
          if (!empty($subarticle2)): ?>
        <p class="article__description"><?php echo $subarticle2 ?></p>
        <?php endif;
        ?>
        <?php 
          $subtitle3 = get_field('subtitle3');
          if (!empty($subtitle3)): ?>
        <h3 class="article__subtitle"><?php echo $subtitle3 ?></h3>
        <?php endif;
        ?>
        <?php 
          $subarticle3 = get_field('subarticle3');
          if (!empty($subarticle3)): ?>
        <p class="article__description"><?php echo $subarticle3 ?></p>
        <?php endif;
        ?>
        <?php 
        $list_text = get_field('article_list');

        if ($list_text):
            $items = explode("\n", $list_text); ?>
        <ul class="article__items">
          <?php foreach ($items as $item): ?>
          <?php if (trim($item)): ?>
          <li class="article__item"><?php echo esc_html(trim($item)); ?></li>
          <?php endif; ?>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </div>
      <a class="button-typical button-hide close" role="button"
        href="#<?php the_field('article_id') ?>head">Свернуть</a>
    </article>
    <?php
      }
      wp_reset_postdata();
    ?>
  </main>
</div>

<?php
get_footer();
?>
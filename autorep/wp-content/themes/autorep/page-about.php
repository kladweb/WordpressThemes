<?php
/*
Template Name: О компании
*/
?>

<?php
get_header();
?>

<div class="page-header">
  <div class="content">
    <span><a class="page-header__home" href="../index.html">Главная</a></span>
    <span class="page-header__sep">/</span>
    <span class="page-header__title">О компании</span>
    <h1 class="page-header__name">О компании</h1>
  </div>
</div>
<div class="content container-flex">
  <aside class="popular">
    <h2 class="popular-head">Наши партнеры</h2>
    <?php 
        $my_posts = get_posts( array(
          'numberposts' => -1,
          'category_name' => 'partners',
          'orderby'     => 'date',
          'order'       => 'ASC',
          'post_type'   => 'post',
          'suppress_filters' => true,
        ) );

          global $post;

          foreach( $my_posts as $post ) {
            setup_postdata( $post );
            $image = get_field('company_logo');
            ?>
    <div class="popular__title">
      <a class="popular__link" href="<?php the_field('company_url') ?>" title="<?php echo $image['alt']; ?>"
        target="_blank">
        <img class="popular__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
          title="<?php echo $image['alt']; ?>">
      </a>
      <a class="popular__item" href="<?php the_field('company_url') ?>" target="_blank">
        <span><?php the_field('company_name') ?></span>
      </a>
    </div>
    <?php
      }
      wp_reset_postdata();
    ?>
    <h2 class="popular-head">Популярные статьи</h2>
    <div class="popular__title">
      <a class="popular__link" href="articles.html#car-rims">
        <img class="popular__img" src="../img/shared/car-rims.jpg" alt="car-rims">
      </a>
      <a class="popular__item" href="articles.html#car-rims">
        <span>Какие диски лучше стальные или легкосплавные?</span>
      </a>
    </div>
    <div class="popular__title">
      <a class="popular__link" href="articles.html#electro-car">
        <img class="popular__img" src="../img/services/electrocar.jpg" alt="electrocar">
      </a>
      <a class="popular__item" href="articles.html#electro-car">
        <span>Гибридные и электрические автомобили</span>
      </a>
    </div>
    <div class="popular__title">
      <a class="popular__link" href="articles.html#car-body">
        <img class="popular__img" src="../img/shared/car-body.jpg" alt="car-body">
      </a>
      <a class="popular__item" href="articles.html#car-body">
        <span>Проверяем кузов автомобиля перед покупкой</span>
      </a>
    </div>
    <div class="popular__title">
      <a class="popular__link" href="articles.html#car-greasing">
        <img class="popular__img" src="../img/shared/car-greasing.jpg" alt="car-greasing">
      </a>
      <a class="popular__item" href="articles.html#car-greasing">
        <span>Автомобильная силиконовая смазка</span>
      </a>
    </div>
    <div class="popular__title popular__title--pos-last">
      <a class="popular__link" href="articles.html#car-abs">
        <img class="popular__img" src="../img/shared/car-abs.jpg" alt="car-abs">
      </a>
      <a class="popular__item" href="articles.html#car-abs">
        <span>Три буквы: почему горит лампочка ABS и как это исправить?</span>
      </a>
    </div>
  </aside>
  <main class="main-about">
    <section class="about">
      <h2 class="about__title"><?php the_field('mainabout_1') ?></h2>
      <p class="about__description"><?php the_field('descrabout_1') ?></p>
      <!-- <img class="about__img" src="../img/shared/about.jpg" alt="about"> -->
      <?php 
              $image = get_field('img_about');
                if (!empty($image)): ?>
      <img class="about__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
      <?php endif; 
          ?>
      <h2 class="about__title"><?php the_field('mainabout_2') ?></h2>
      <p class="about__description"><?php the_field('descrabout_2') ?></p>
      <h2 class="about__title about__title--text-up"><?php the_field('mainabout_3') ?></h2>
      <p class="about__description"><?php the_field('descrabout_3') ?></p>
    </section>
    <div class="clear"></div>
  </main>
</div>
<section class="feedback">
  <div class="content">
    <h2 class="feedback__name">Что говорят наши <span>клиенты</span></h2>
    <?php 
        $my_posts = get_posts( array(
          'numberposts' => -1,
          'category_name' => 'otzyvy',
          'orderby'     => 'date',
          'order'       => 'ASC',
          'post_type'   => 'post',
          'suppress_filters' => true,
        ) );

          global $post;

          foreach( $my_posts as $post ) {
            setup_postdata( $post );
            $image = get_field('client_foto');
            ?>
    <div class="review fl">
      <div class="review__item">
        <div class="review__image fl">
          <img src="<?php echo $image['url']; ?>" title="<?php echo $image['alt']; ?>"
            alt="<?php echo $image['alt']; ?>">
        </div>
        <div class="review__content">
          <div class="review__title">
            <span class="review__name"><?php the_title() ?></span>
            <span class="review__client fr"><?php the_field('feedback_date') ?></span>
          </div>
          <p class="review__description clearfix"><?php the_field('feedback_text') ?></p>
        </div>
      </div>
    </div>
    <?php
      }
      wp_reset_postdata();
    ?>
  </div>
</section>

<?php
get_footer();
?>
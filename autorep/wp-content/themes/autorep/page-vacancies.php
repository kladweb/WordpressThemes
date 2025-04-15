<?php
/*
Template Name: Вакансии
*/
?>

<?php
get_header();
?>

<div class="page-header">
  <div class="content">
    <span><a class="page-header__home" href="../index.html">Главная</a></span>
    <span class="page-header__sep">/</span>
    <span class="page-header__title">Вакансии</span>
    <h1 class="page-header__name">Вакансии</h1>
  </div>
</div>
<main class="vacancies">
  <div class="content">
    <h1 class="vacancies__title"><?php the_field('vacancies_head') ?></h1>
    <div class="vacancies_items">
      <?php 
        $my_posts = get_posts( array(
          'numberposts' => -1,
          'category_name' => 'vakansii',
          'orderby'     => 'date',
          'order'       => 'ASC',
          'post_type'   => 'post',
          'suppress_filters' => true,
        ) );

          global $post;

          foreach( $my_posts as $post ) {
            setup_postdata( $post );
            $image = get_field('vacancy_img');
            ?>
      <div class="vacancy">
        <div class="vacancy__rectangle">
          <img class="vacancy__picture" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
            title="<?php echo $image['alt']; ?>">
        </div>
        <div class="vacancy__content">
          <h2 class="vacancy__name"><?php the_title() ?></h2>
          <p class="vacancy__description"><?php the_field('vacancy_experience') ?></p>
          <h3 class="vacancy__name">Обязанности</h3>
          <p class="vacancy__description"><?php the_field('vacansy_duties') ?></p>
        </div>
        <div class="clear"></div>
      </div>
      <?php
      }
      wp_reset_postdata();
    ?>
    </div>

    <?php 
          $card1 = get_field('card1');
          if ($card1): ?>
    <div class="card card--first">
      <img class="card__img" src="<?php the_field('card1_img') ?>" alt="autservice">
      <h2 class="card__title card__title--first"><?php the_field('card1_title') ?></h2>
      <?php 
          $list_text = get_field('card1_list');
          
          if ($list_text):
            $items = explode("\n", $list_text); ?>
      <ul class="card__items card__items--first">
        <?php foreach ($items as $item): ?>
        <?php if (trim($item)): ?>
        <li><?php echo esc_html(trim($item)); ?></li>
        <?php endif; ?>
        <?php endforeach; ?>
      </ul>
      <?php endif;
      ?>
      <!-- <div class="clear"></div> -->
    </div>
    <?php endif;
    ?>
    <?php 
          $card2 = get_field('card2');
          if ($card2): ?>
    <div class="card card--border-red">
      <img class="card__img" src="<?php the_field('card2_img') ?>" alt="education">
      <h2 class="card__title"><?php the_field('card2_title') ?></h2>

      <?php 
          $list_text = get_field('card2_list');
          
          if ($list_text):
            $items = explode("\n", $list_text); ?>
      <ul class="card__items">
        <?php foreach ($items as $item): ?>
        <?php if (trim($item)): ?>
        <li><?php echo esc_html(trim($item)); ?></li>
        <?php endif; ?>
        <?php endforeach; ?>
      </ul>
      <?php endif;
      ?>
      <p class="card__info"><?php the_field('card2_note') ?></p>
      <div class="clear"></div>
    </div>
    <?php endif;
    ?>
  </div>
</main>

<?php
get_footer();
?>
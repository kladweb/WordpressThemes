<?php
/*
Template Name: Контакты
*/
?>

<?php
get_header();
?>

<div class="page-header">
  <div class="content">
    <span><a class="page-header__home" href="/">Главная</a></span>
    <span class="page-header__sep">/</span>
    <span class="page-header__title">Контакты</span>
    <h1 class="page-header__name">Контакты</h1>
  </div>
</div>
<main>
  <div class="content content-blocks">
    <section class="contacts">
      <h2 class="contacts__title">
        <span><?php the_field('contacts_name') ?></span> <?php the_field('contacts_descr') ?>
      </h2>
      <ul class="contacts__items">
        <li class="contacts__item contacts__item--type-address">
          <?php the_field('address', 2)?><br>
        </li>

        <?php 
            $list_text = get_field('address_second');
            
            if ($list_text):
              $items = explode("\n", $list_text); ?>
        <?php foreach ($items as $item): ?>
        <?php if (trim($item)): ?>
        <li class="contacts__item contacts__item--type-address-reg">
          <?php echo esc_html(trim($item)); ?>
        </li>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php endif;
        ?>
        <li class="contacts__item contacts__item--type-mail"><?php the_field('mail', 2)?></li>
        <li class="contacts__item contacts__item--type-tel"><?php the_field('phone', 2)?></li>
        <li class="contacts__item contacts__item--type-time"><?php the_field('work_time', 2)?></li>
      </ul>
      <h3 class="contacts__title contacts__title--size-small">Мы в социальных сетях</h3>
      <div class="contacts__messengers">
        <?php 
              $viberlink = get_field('viber', 2);
              if (!empty($viberlink)): ?>
        <a class="contacts__Viber" href="<?php echo $viberlink; ?>" title="Viber">
          <img class="contacts__soc contacts__Viber-w"
            src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/Viber_white.png" alt="Viber">
          <img class="contacts__soc contacts__Viber-c"
            src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/Viber.png" alt="Viber">
        </a>
        <?php endif; 
        ?>
        <?php 
              $telegramlink = get_field('telegram', 2);
              if (!empty($telegramlink)): ?>
        <a class="contacts__Telegram" href="<?php echo $telegramlink; ?>" title="Telegram">
          <img class="contacts__soc contacts__Telegram-w"
            src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/Telegram_white.png" alt="Telegram">
          <img class="contacts__soc contacts__Telegram-c"
            src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/Telegram.png" alt="Telegram">
        </a>
        <?php endif; 
        ?>
        <?php 
              $instagramlink = get_field('instagram', 2);
              if (!empty($instagramlink)): ?>
        <a class="contacts__Instagram" href="<?php echo $instagramlink; ?>" title="Instagram">
          <img class="contacts__soc contacts__Instagram-w"
            src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/Instagram_white.png" alt="Instagram">
          <img class="contacts__soc contacts__Instagram-c"
            src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/Instagram.png" alt="Instagram">
        </a>
        <?php endif; 
        ?>
      </div>
      <p class="contacts__description"><?php the_field('logo_description', 2) ?></p>
    </section>
    <section class="form-main">
      <h2 class="form__title">Форма обратной связи</h2>
      <?php echo do_shortcode('[contact-form-7 id="bea47d6" title="Contact form 1"]')?>
    </section>
  </div>
</main>

<?php
get_footer();
?>
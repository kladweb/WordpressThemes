<!doctype html>
<html lang="ru-RU">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="AUTO-REP">
  <meta property="og:title" content="Сеть СТО AUTO-REP">
  <meta property="og:description" content="Полный комплекс обслуживания автомобилей">
  <meta property="og:image" content="<?php echo bloginfo('template_url'); ?>/assets/img/shared/open.jpg">
  <title>AUTO-REP</title>
  <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/icons/autorep.ico">
  <?php
      wp_head();
    ?>
</head>

<body>
  <header class="main-header">
    <div class="backdrop"></div>
    <div class="modal">
      <h1 class="modal__title">Наш call-центр</h1>
      <h2 class="modal__number"><?php the_field('phone', 2)?></h2>
      <div class="modal__actions">
        <button class="modal__action" type="button">Закрыть</button>
        <button class="modal__close" type="button"></button>
      </div>
    </div>
    <div class="modal2">
      <h1 class="modal__number">Внимание!</h1>
      <h2 class="modal__title">Этот сайт продаётся!</h2>
      <p class="modal2__info">Есть возможность менять контент через административную панель.</p>
      <p class="modal2__info">Сайт ещё находится в процессе разработки и может быть адаптирован под Ваш бизнес.</p>
      <p class="modal2__info">Добавим/удалим/изменим любые элементы/страницы/название сайта по Вашему желанию и вкусу.
      </p>
      <div class="modal2__actions">
        <div>
          <a class="modal2__action" type="button" href="https://t.me/kladpav" target="_blank">Подробнее</a>
        </div>
        <div>
          <a class="modal2__action" type="button" href="https://t.me/kladpav" target="_blank">Купить</a>
        </div>
        <div class="modal2__action modal2__close" type="button">Закрыть</div>
        <button class="modal__close" type="button"></button>
      </div>
    </div>
    <div class="content">
      <!-- <a class="main-header__brand" href="index.html" title="На главную страницу">
          <img class="main-header__logo" src="<?php echo bloginfo('template_url'); ?>/assets/img/logos/AUTO-REP_white.png" alt="AUTO-REP">
        </a> -->
      <div class="main-header__brand" title="На главную страницу">
        <?php the_custom_logo() ?>
      </div>
      <nav class="main-nav" data-slide="1">
        <div class="menu__icon"><span></span></div>

        <?php 
            wp_nav_menu( [
              'menu'            => 'Main',
              'container'       => false,
              'container_class' => '',
              'container_id'    => '',
              'menu_class'      => 'main-nav__item',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="main-nav__items">%3$s</ul>',
              'depth'           => 1,
            ] );

        ?>



        <!-- <ul class="main-nav__items">
          <li class="main-nav__item">
            <a class="main-nav__link" href="/services/">Наши услуги</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="/about/">О нас</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="/towing/">Буксировка и техпомощь</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="/articles/">Статьи</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="/vacancies/">Вакансии</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="/contacts/">Контакты</a>
          </li>
          <li class="main-nav__item main-nav__item-button">
            <button class="button-typical main-nav__button">Связаться с нами</button>
          </li>
        </ul> -->
      </nav>
    </div>
  </header>
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
      <h2 class="modal__number">+375(77)7777777</h2>
      <div class="modal__actions">
        <button class="modal__action" type="button">Закрыть</button>
        <button class="modal__close" type="button"></button>
      </div>
    </div>
    <div class="content">
      <!-- <a class="main-header__brand" href="index.html" title="На главную страницу">
          <img class="main-header__logo" src="<?php echo bloginfo('template_url'); ?>/assets/img/logos/AUTO-REP_white.png" alt="AUTO-REP">
        </a> -->
      <div class="main-header__brand" href="index.html" title="На главную страницу">
        <?php the_custom_logo() ?>
      </div>
      <nav class="main-nav">
        <div class="menu__icon"><span></span></div>
        <ul class="main-nav__items">
          <li class="main-nav__item">
            <a class="main-nav__link" href="pages/services.html">Наши услуги</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="pages/about.html">О нас</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="pages/towing.html">Буксировка и техпомощь</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="pages/articles.html">Статьи</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="pages/vacancies.html">Вакансии</a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="pages/contacts.html">Контакты</a>
          </li>
          <li class="main-nav__item main-nav__item-button">
            <button class="button-typical main-nav__button">Связаться с нами</button>
          </li>
        </ul>
      </nav>
    </div>
  </header>
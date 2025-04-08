<footer class="footer">
  <div class="footer-head">
    <img class="footer-head__mechanic"
      src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/footer-mechanic.png" alt="mechanic">
    <img class="footer-head__houses" src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/footer-houses.png"
      alt="houses">
  </div>
  <div class="footer-basic">
    <div class="content footer__main-block">
      <div class="footer__company">
        <a class="footer__brand" href="index.html" title="На главную страницу">
          <?php 
              $image = get_field('logo_footer', 2);
              if (!empty($image)): ?>
          <img class="footer__logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
          <?php endif; ?>
        </a>
        <p class="footer__description"><?php the_field('logo_description', 2) ?></p>
      </div>
      <div class="footer__services">
        <h2 class="footer__services-title">Наши услуги</h2>
        <ul class="footer__service-items">
          <?php 
          // параметры по умолчанию
        $my_posts = get_posts( array(
          'numberposts' => 4,
          'category'    => 0,
          'orderby'     => 'rand', // выбираем случайные посты
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

          global $post;

          foreach( $my_posts as $post ) {
            setup_postdata( $post );
            $image = get_field('service_img');
            ?>
          <li class="footer__service-item">
            <a class="footer__link" href="/services/"><?php the_title() ?></a>
          </li>
          <?php
          }
          wp_reset_postdata(); // сброс
          ?>
          <li class="footer__service-item">
            <a class="footer__link" href="/services/">. . .</a>
          </li>
        </ul>
      </div>
      <div class="footer__contacts">
        <h2 class="footer__services-title">Контакты</h2>
        <ul class="footer__contact-items">
          <li class="footer__contact-item footer__contact-item--type-address"><?php the_field('address', 2)?></li>
          <li class="footer__contact-item footer__contact-item--type-mail"><?php the_field('mail', 2)?></li>
          <li class="footer__contact-item footer__contact-item--type-tel"><?php the_field('phone', 2)?></li>
          <li class="footer__contact-item footer__contact-item--type-time"><?php the_field('work_time', 2)?></li>
        </ul>
        <div class="footer__messengers">
          <?php 
              $sociallink = get_field('viber', 2);
              if (!empty($sociallink)): ?>
          <!-- <img class="footer__logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"> -->
          <a class="footer__social-Viber" href="<?php echo $sociallink; ?>">
            <img class="footer__social" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/Viber.png"
              alt="Viber">
          </a>
          <?php endif; ?>

          <!-- <a class="footer__social-Viber" href="pages/contacts.html">
            <img class="footer__social" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/Viber.png"
              alt="Viber">
          </a> -->

          <a class="footer__social-Telegram" href="pages/contacts.html">
            <img class="footer__social" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/Telegram.png"
              alt="Telegram">
          </a>
          <a class="footer__social-Instagram" href="pages/contacts.html">
            <img class="footer__social" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/Instagram.png"
              alt="Instagram">
          </a>
        </div>
      </div>
    </div>
    <div class="content footer__market">
      <a class="footer__app" href="#">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/App_Store.png" alt="appstore">
      </a>
      <a class="footer__app" href="#">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/googleplay.png" alt="googleplay">
      </a>
    </div>
    <p class="footer__copyright">Copyright © 2022 Все права защищены</p>
  </div>
</footer>
<div class="scroll-up"></div>
<?php
      wp_footer();
    ?>
</body>

</html>
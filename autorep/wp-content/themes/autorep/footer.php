<footer class="footer">
      <div class="footer-head">
        <img class="footer-head__mechanic" src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/footer-mechanic.png" alt="mechanic">
        <img class="footer-head__houses" src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/footer-houses.png" alt="houses">
      </div>
      <div class="footer-basic">
        <div class="content footer__main-block">
          <div class="footer__company">
            <a class="footer__brand" href="index.html" title="На главную страницу">
              <img class="footer__logo" src="<?php echo bloginfo('template_url'); ?>/assets/img/logos/AUTO-REP_gr_w.png" alt="AUTO-REP">
            </a>
            <p class="footer__description">Наша компания предоставляет все виды услуг по обслуживанию Вашего автомобиля
              или мотоцикла, включая
              диагностику, ремонт, а также шиномонтаж.</p>
          </div>
          <div class="footer__services">
            <h2 class="footer__services-title">Наши услуги</h2>
            <ul class="footer__service-items">
              <li class="footer__service-item">
                <a class="footer__link" href="pages/services.html">Ремонт электромобилей и гибридов</a>
              </li>
              <li class="footer__service-item">
                <a class="footer__link" href="pages/services.html">Шиномонтаж</a>
              </li>
              <li class="footer__service-item">
                <a class="footer__link" href="pages/services.html">Ремонт двигателей</a>
              </li>
              <li class="footer__service-item">
                <a class="footer__link" href="pages/services.html">Техническое обслуживание</a>
              </li>
              <li class="footer__service-item">
                <a class="footer__link" href="pages/services.html">. . .</a>
              </li>
            </ul>
          </div>
          <div class="footer__contacts">
            <h2 class="footer__services-title">Контакты</h2>
            <ul class="footer__contact-items">
              <li class="footer__contact-item footer__contact-item--type-address">г. Минск, ул. Антоновская, 7
                (главный oфис)
              </li>
              <li class="footer__contact-item footer__contact-item--type-mail">auto-rep@gmail.com</li>
              <li class="footer__contact-item footer__contact-item--type-tel">+375 (77) 777-77-77</li>
              <li class="footer__contact-item footer__contact-item--type-time">Ежедневно с 09:00 до 19:00</li>
            </ul>
            <div class="footer__messengers">
              <a class="footer__social-Viber" href="pages/contacts.html">
                <img class="footer__social" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/Viber.png" alt="Viber">
              </a>
              <a class="footer__social-Telegram" href="pages/contacts.html">
                <img class="footer__social" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/Telegram.png" alt="Telegram">
              </a>
              <a class="footer__social-Instagram" href="pages/contacts.html">
                <img class="footer__social" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/Instagram.png" alt="Instagram">
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
        <p class="footer__copyright">Copyright © 2022 Все права защищены</p></div>
    </footer>
    <div class="scroll-up"></div>
    <?php
      wp_footer();
    ?>
  </body>
</html>
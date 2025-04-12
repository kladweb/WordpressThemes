    <?php
      get_header();
    ?>
    <main>
      <section class="company-overview">
        <div class="content">
          <h1 class="company-intro"><?php the_field('head_main_page') ?></h1>
        </div>
      </section>
      <section class="about">
        <div class="content">
          <?php 
              $image = get_field('about__img');
                if (!empty($image)): ?>
          <img class="about__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
          <?php endif; 
          ?>
          <h2 class="about__titles">
            <!-- <span class="about__suptitle">Несколько слов</span><br>
            <span class="about__title">о нашей компании</span> -->
            <span class="about__suptitle"><?php the_field('about__suptitle') ?></span>
            <?php 
                if (!empty(get_field('about__suptitle'))): ?>
            <br>
            <?php endif;
            ?>
            <span class="about__title"><?php the_field('about__title') ?></span>
          </h2>
          <p class="about__description"><?php the_field('about__description') ?></p>
          <h2 class="about__titles about__titles--less">Почему МЫ?</h2>
          <ul class="about__items">
            <li class="about__item"><strong>Доверие:</strong> когда дело доходит до ремонта автомобилей, чтобы
              заработать Ваши лояльность
              и доверие, мы делаем все возможное каждый день;
            </li>
            <li class="about__item"><strong>Талант:</strong> С «AUTO-REP» вы можете отдыхать спокойно, зная, что наши
              высококвалифицированные и опытные профессионалы обслуживают ваш автомобиль. Наши специалисты привносят
              многолетний опыт, навыки и образование для ремонта автомобилей;
            </li>
            <li class="about__item"><strong>Время:</strong> Мы уделяем время столько, сколько нам необходимо, чтобы
              предоставить Вам
              высококачественный автосервис в наших автосервисах.
            </li>
          </ul>
          <a class="button-typical about__button" role="button" href="pages/about.html">
            <span>Узнать подробнее</span>
          </a>
          <div class="clear"></div>
          <div class="main-video">
            <video controls="controls" poster="<?php echo bloginfo('template_url'); ?>/assets/video/poster.jpg">
              <source src="<?php echo bloginfo('template_url'); ?>/assets/video/AUTO-REP.mp4"
                type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
              <source src="<?php echo bloginfo('template_url'); ?>/assets/video/AUTO-REP.webm"
                type='video/webm; codecs="vp8, vorbis"'>
              Видео не поддерживается Вашим браузером.
            </video>
          </div>
        </div>
      </section>
    </main>
    <?php
      get_footer();
    ?>

<?php get_header(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Добро пожаловать!</h1>
        <h2 class="headline headline--medium">Мы думаем, что вам здесь нравится.</h2>
        <h3 class="headline headline--small">Почему бы вам не проверить интересующую вас специальность?</h3>
        <a href="#" class="btn btn--large btn--blue">Найдите свою специальность</a>
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Предстоящие События</h2>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Мар</span>
              <span class="event-summary__day">25</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Поэзия в 100</a></h5>
              <p>прозвоните стихи, которые вы написали в здание 100 во вторник для открытого микрофона и закусок. Учить больше <a href="#" class="nu gray">Учить больше</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Апр</span>
              <span class="event-summary__day">02</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Квадратный пикник</a></h5>
              <p>Живая музыка, грузовик с тако и многое другое можно найти на нашем третьем ежегодном пикнике на квадроциклах.<a href="#" class="nu gray">Учить больше</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--blue">Посмотреть все события</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Из наших блогов</h2>

          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Янв</span>
              <span class="event-summary__day">20</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Нас признали лучшей школой</a></h5>
              <p>Уже 100-й год подряд мы занимаем первое место.<a href="#" class="nu gray">Читать далее</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Фев</span>
              <span class="event-summary__day">04</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Профессора в национальном центре внимания</a></h5>
              <p>Недавно два наших профессора были в национальных новостях. <a href="#" class="nu gray">Читать далее</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--yellow">Просмотреть все сообщения в блоге</a></p>
        </div>
      </div>
    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Бесплатный транспорт</h2>
                <p class="t-center">Все студенты имеют бесплатный неограниченный проезд в автобусе.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Учить больше</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/apples.jpg)') ?>">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Яблоко в день</h2>
                <p class="t-center">Наша стоматологическая программа рекомендует есть яблоки.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Учить больше</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bread.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Бесплатное питание</h2>
                <p class="t-center">Fictional University предлагает планы обедов для нуждающихся.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Учить больше</a></p>
              </div>
            </div>
          </div>
         </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>


    <?php  get_footer();
?>


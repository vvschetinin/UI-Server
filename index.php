<?header('Content-type: text/html; charset=utf-8');?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <link rel="icon" type="image/svg+xml" href="/assets/images/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AI Tools | Главная</title>
  <script type="module" crossorigin src="/assets/scripts/main.js"></script>
  <link rel="stylesheet" crossorigin href="/assets/styles/main.css" />
  <?php if (file_exists($root . "/interface/seo/metrics.php")): ?>
  <?php require_once $root . '/interface/seo/metrics.php';?>
  <?php endif;?>
</head>

<body class="">
  <div class="site-wrapper">

    <?php if (file_exists($root . "/template/shared/header.php")): ?>
    <?php require_once $root . '/template/shared/header.php';?>
    <?php endif;?>

    <main class="site-content">
      <section class="hero hero--large bg-hero">
        <figure class="hero-media">
          <video class="hero-video" preload="auto" poster="/assets/images/hero/main-hero.jpg" loop muted playsinline
            autoplay controls>
            <source src="/assets/video/careers.mp4" type="video/mp4" />
          </video>
        </figure>
        <div class="hero-container">
          <div class="hero-content">
            <h3 class="sectorname">Сайт Владлена Щетинина</h3>
            <h1 class="hero-title">AI-инструменты для бизнеса<span>Чат-боты и Контент-маркетинг</span></h1>
            <div class="hero-text">
              <p>Помогаю малому бизнесу экономить время и привлекать клиентов с помощью AI-ассистентов и
                SEO-оптимизированного контента</p>
            </div>
            <div class="hero-buttons">
              <a class="btn btn--purple" href="/services/">Предлагаемые услуги</a>
              <a class="btn btn--white" href="/cases/">Мои проекты</a>
            </div>
          </div>
        </div>
        <!-- Logo Circle -->
        <?php if (file_exists($root . "/interface/include/logo-circle.php")) : ?>
        <?php require $root . '/interface/include/logo-circle.php'; ?>
        <?php endif; ?>
        <!-- End Logo Circle -->
      </section>

      <section class="s-present section--inner bg-dark">
        <div class="container--middle">
          <div class="row element-animation-up">
            <div class="col-100 flex justify-center">
              <div class="home-quotes">
                <?php echo $slogan; ?>
              </div>
            </div>
            <div class="col-100">
              <article class="mt-3 mt-5--lg">
                <h2 class="h2-title mb-1">Хотите вывести бизнес на новый уровень?</h2>
                <p>
                  Создаю контент, настраиваю SEO, разрабатываю AI-чат-боты для общения 24/7 и AI-ассистентов для
                  автоматизации задач, чтобы ваш бренд выделялся, а
                  процессы работали эффективно. Адаптирую решения под ваши цели, чтобы усилить бренд, привлечь клиентов
                  и повысить прибыль. Получите персонализированный
                  подход, который экономит время и приносит результат. Начните с консультации и раскройте потенциал
                  вашего бизнеса уже сегодня!
                </p>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section class="s-service-listing section--inner bg-dark">
        <div class="container--middle">
          <div class="row content-block element-animation-up">
            <div class="col-100">
              <div class="swiper service-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <article class="service-item">
                      <h3 class="h3-title lh-1 deco-line mb-15">Контент-маркетинг</h3>
                      <p>
                        Создаю яркие посты, статьи и продающие тексты, которые усиливают бренд и повышают конверсии.
                        Привлекайте клиентов через рекламу с контентом,
                        адаптированным под ваши цели.
                      </p>
                    </article>
                  </div>
                  <div class="swiper-slide">
                    <article class="service-item">
                      <h3 class="h3-title lh-1 deco-line mb-15">AI Чат-боты</h3>
                      <p>
                        Разрабатываю чат-боты для общения 24/7, автоматизации заказов и сбора отзывов. Это повышает
                        лояльность клиентов, сокращает рутину и увеличивает
                        продажи на любых платформах.
                      </p>
                    </article>
                  </div>
                  <div class="swiper-slide">
                    <article class="service-item">
                      <h3 class="h3-title lh-1 deco-line mb-15">AI-ассистенты</h3>
                      <p>
                        Настраиваю AI-ассистентов для автоматизации задач, аналитики и планирования. Это экономит время,
                        минимизирует ошибки и помогает вашему бизнесу
                        работать эффективнее.
                      </p>
                    </article>
                  </div>
                  <div class="swiper-slide">
                    <article class="service-item">
                      <h3 class="h3-title lh-1 deco-line mb-15">SEO-продвижение</h3>
                      <p>
                        Оптимизирую сайт для топовых позиций в Google и Яндекс. Это привлекает целевой трафик,
                        увеличивает конверсии и укрепляет ваш бренд без лишних
                        затрат.
                      </p>
                    </article>
                  </div>
                  <div class="swiper-slide">
                    <article class="service-item">
                      <h3 class="h3-title lh-1 deco-line mb-15">Дополнительные услуги</h3>
                      <p>
                        Обеспечиваю мобильную адаптацию, ускорение загрузки, оптимизацию по Google PageSpeed, проверку
                        кода и создание адаптивных тем для CMS. Дает
                        удобство и производительность сайта.
                      </p>
                    </article>
                  </div>
                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
              <div class="service-listing-pagination swiper-pagination"></div>
              <!-- Блок кнопок -->
              <div class="button-wrap flex justify-center mt-2 mt-3--lg">
                <button class="start-project-btn display-inline-block js-startproject">Получить консультацию</button>
              </div>
            </div>
          </div>
          <div class="row element-animation-up">
            <div class="col-100">
              <h2 class="h2-title deco-line">Почему выбирают меня</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="choose">
                <h3 class="h3-title lh-1 mb-05">Индивидуальный подход</h3>
                <p>
                  Адаптирую каждую услугу под ваши цели, будь то контент, SEO или AI-чат-боты. Это обеспечивает решения,
                  которые точно соответствуют вашим задачам,
                  усиливают бренд и приносят результат, экономя ваше время.
                </p>
              </article>
              <article class="choose mt-15">
                <h3 class="h3-title lh-1 mb-05">Быстрые результаты</h3>
                <p>
                  Предоставляю качественные решения в сжатые сроки, от продающих текстов до оптимизированных сайтов. Это
                  позволяет вашему бизнесу быстрее привлекать
                  клиентов, увеличивать конверсии и достигать поставленных целей.
                </p>
              </article>
              <article class="choose mt-15">
                <h3 class="h3-title lh-1 mb-05">Прозрачность и поддержка</h3>
                <p>
                  Предоставляю чёткие планы и регулярные отчёты, чтобы вы всегда знали, как продвигается работа. Остаюсь
                  на связи, чтобы ответить на вопросы и помочь
                  вашему бизнесу расти.
                </p>
              </article>
              <article class="choose mt-15">
                <h3 class="h3-title lh-1 mb-05">Фокус на вашем успехе</h3>
                <p>
                  Работаю, чтобы ваш бизнес выделялся и процветал. Мои решения, от 1С-Битрикс до AI-ассистентов, созданы
                  для повышения эффективности, привлечения
                  клиентов и долгосрочного роста.
                </p>
              </article>
            </div>
          </div>
          <!-- Призыв к действию -->
          <div class="row mt-3">
            <div class="col-100">
              <article>
                <p>
                  <span class="color-white font-middle">Готовы к росту вашего бизнеса?</span>
                  Хотите больше клиентов и эффективные процессы? Предлагаю контент, SEO, AI-чат-боты для общения 24/7,
                  AI-ассистентов для автоматизации и оптимизацию
                  сайтов. Адаптирую решения под ваши задачи, чтобы усилить бренд и повысить прибыль. Свяжитесь для
                  консультации, чтобы начать уже сегодня! Узнайте
                  больше в моих
                  <a class="hover-link" href="/services/">услугах</a> и <a class="hover-link" href="/blog/">статьях в
                    блоге</a>.
                </p>
              </article>
              <!-- Блок кнопок -->
              <div class="button-wrap flex justify-center mt-2 mt-3--lg">
                <button class="start-project-btn display-inline-block js-startproject">Получить консультацию</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ================================================== -->

      <?php if (file_exists($root . "/template/shared/footer.php")): ?>
      <?php require_once $root . '/template/shared/footer.php';?>
      <?php endif;?>
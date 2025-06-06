<?header('Content-type: text/html; charset=utf-8');?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <link rel="icon" type="image/svg+xml" href="/assets/images/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AI Tools | Услуги</title>
  <script type="module" crossorigin src="/assets/scripts/main.js"></script>
  <link rel="stylesheet" crossorigin href="/assets/styles/main.css" />
  <?php if (file_exists($root . "/interface/seo/metrics.php")): ?>
  <?php require_once $root . '/interface/seo/metrics.php';?>
  <?php endif;?>
</head>

<body>
  <div class="site-wrapper">
    <?php if (file_exists($root . "/template/shared/header-inner.php")): ?>
    <?php require_once $root . '/template/shared/header-inner.php';?>
    <?php endif;?>
    <main class="site-content">
      <section class="hero hero--small">
        <figure class="hero-media hidden"></figure>
        <div class="hero-container">
          <div class="hero-content">
            <h3 class="sectorname">Услуги</h3>
            <h1 class="hero-title">Чат-боты, SEO и контент <span>которые работают на вас</span></h1>
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
      <section class="section-type s-services bg-dark">
        <div class="container--middle">
          <div class="row content-block element-animation-up">
            <div class="col-100">
              <h2 class="h2-title deco-line mb-2">Рост вашего бизнеса с умными решениями</h2>
              <p>
                Хотите вывести свой бизнес на новый уровень? Перечисленные ниже услуги объединяют передовые технологии и
                проверенные подходы, чтобы автоматизировать
                процессы, привлекать больше клиентов и создавать контент, который работает. От умных чат-ботов и SEO до
                AI-ассистентов и контент-маркетинга — я помогу
                вам экономить время, сокращать затраты и достигать целей. Узнайте, как это может преобразить ваш бизнес
                уже сегодня!
              </p>
            </div>
          </div>

          <div class="row content-block justify-center">
            <div class="col-100 col-md-50 col-lg-40 mb-2">
              <div class="services-item">
                <a href="/pages/services/content/">
                  <div class="services-banner">
                    <picture class="inner">
                      <img src="/assets/images/services/content/content.webp" alt="Баннер контент" />
                    </picture>
                  </div>
                </a>
                <div class="services-prev">
                  <div class="content">
                    <h3 class="h3-title mb-1" itemprop="name">Контент-маркетинг</h3>
                    <p itemprop="description">
                      Контент, который идеально соответствует вашему стилю и задачам. Привлечение аудитории в соцсетях,
                      создание презентаций и рекламных материалов.
                    </p>
                  </div>
                  <a href="/services/content/" class="find-btn">Узнать больше</a>
                </div>
              </div>
            </div>

            <div class="col-100 col-md-50 col-lg-40 mb-2">
              <div class="services-item">
                <a href="/pages/services/aibots/">
                  <div class="services-banner">
                    <picture class="inner">
                      <img src="/assets/images/services/aibots/aibots.webp" alt="Баннер чат-бот" />
                    </picture>
                  </div>
                </a>
                <div class="services-prev">
                  <div class="content">
                    <h3 class="h3-title mb-1" itemprop="name">AI Чат-боты</h3>
                    <p itemprop="description">
                      Автоматизированное общение с клиентами — от консультаций и поддержки до обработки заказов и сбора
                      контактов. С AI чат-ботами вы всегда на связи!
                    </p>
                  </div>
                  <a href="/services/aibots/" class="find-btn">Узнать больше</a>
                </div>
              </div>
            </div>

            <div class="col-100 col-md-50 col-lg-40 mb-2 mb-0--md">
              <div class="services-item">
                <a href="/pages/services/aihelpers/">
                  <div class="services-banner">
                    <picture class="inner">
                      <img src="/assets/images/services/aihelpers/aihelpers.webp" alt="Баннер ассистент" />
                    </picture>
                  </div>
                </a>
                <div class="services-prev">
                  <div class="content">
                    <h3 class="h3-title mb-1" itemprop="name">AI Ассистенты</h3>
                    <p itemprop="description">
                      AI-ассистенты — ваш надёжный партнёр в оптимизации бизнес-процессов! Автоматизированное управление
                      задачами, от планирования до выполнения и
                      подготовки отчётов.
                    </p>
                  </div>
                  <a href="/services/aihelpers/" class="find-btn">Узнать больше</a>
                </div>
              </div>
            </div>

            <div class="col-100 col-md-50 col-lg-40 mb-0">
              <div class="services-item">
                <a href="/pages/services/seo/">
                  <div class="services-banner">
                    <picture class="inner">
                      <img src="/assets/images/services/seo/seo.webp" alt="Баннер SEO" />
                    </picture>
                  </div>
                </a>
                <div class="services-prev">
                  <div class="content">
                    <h3 class="h3-title mb-1" itemprop="name">SEO для роста трафика</h3>
                    <p itemprop="description">
                      Передовые инструменты для SEO помогут вам обойти конкурентов и занять топовые позиции в Google,
                      Яндекс и других поисковых системах.
                    </p>
                  </div>
                  <a href="/services/seo/" class="find-btn">Узнать больше</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row element-animation-up">
            <div class="col-100">
              <h3 class="h3-title mb-1">Дополнительные работы и услуги:</h3>
              <ul class="services-list">
                <li>Мобильная адаптация вашего сайта</li>
                <li>Оптимизация сайта по Google PageSpeed</li>
                <li>Проверка и исправление валидности кода</li>
                <li>Ускорение загрузки сайта</li>
                <li>Адаптивные темы для интеграции в CMS</li>
              </ul>
              <p>
                Хотите, чтобы ваш сайт работал безупречно и привлекал больше клиентов? Обеспечу его быструю загрузку,
                идеальную адаптацию под мобильные устройства и
                соответствие современным стандартам. Продуманные решения сделают сайт удобным для пользователей и усилят
                позиции вашего бизнеса в онлайне! Узнайте
                больше в моих <a class="hover-link" href="/cases/">кейсах</a> и <a class="hover-link"
                  href="/blog/">статьях в блоге</a>.
              </p>
              <div class="button-wrap text-center mt-2 mt-3--lg">
                <a href="/cases/" class="view-btn">Смотреть работы</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ================================================== -->

      <?php if (file_exists($root . "/template/shared/footer.php")): ?>
      <?php require_once $root . '/template/shared/footer.php';?>
      <?php endif;?>
<?header('Content-type: text/html; charset=utf-8');?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <link rel="icon" type="image/svg+xml" href="/assets/images/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AI Tools | Кейсы и результаты</title>
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
            <h3 class="sectorname">Кейсы и результаты</h3>
            <h1 class="hero-title">Кейсы, которые вдохновляют<span>От сайтов до AI-решений</span></h1>
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
      <section class="section-type s-casestop bg-dark">
        <div class="container--middle">
          <div class="row content-block element-animation-up">
            <div class="col-100">
              <article>
                <h2 class="h2-title deco-line mb-2">Решения, способствующие успеху</h2>
                <p>
                  Мои проекты усиливают бизнес: от современных сайтов с высокой скоростью и адаптивностью до
                  автоматизации с AI-чат-ботами. Для начала предлагаю
                  понакомиться с примерами сайтов, где я решал задачи клиентов, увеличивая трафик, продажи и лояльность.
                  Хотите для себя современный сайт? Свяжитесь для
                  консультации, мы познакомимся и обсудим детали!
                </p>
              </article>
            </div>
          </div>
          <!-- Галерея сайтов -->
          <div class="row content-block">
            <div class="col-100">
              <div class="workgrid">
                <div class="workgrid-inner">
                  <!-- ================================== -->
                  <div class="mywork-item">
                    <a href="https://vschetinin.ru/assets/demo/beautyshop/" target="_blank" class="grid-item work-item">
                      <div class="inner">
                        <div class="grid-item-image bg--cover"
                          style="background-image:url(/assets/images/cases/demo/beautyshop/prev.jpg.webp)"></div>
                        <div class="work-logo">
                          <span>S-MILLER</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- ================================== -->
                  <div class="mywork-item">
                    <a href="https://vacancy.zmk-mami.ru/" target="_blank" class="grid-item work-item">
                      <div class="inner">
                        <div class="grid-item-image bg--cover"
                          style="background-image:url(/assets/images/cases/demo/zmk/zmk-vacancy.webp)"></div>
                        <div class="work-logo">
                          <span>ЗМК МАМИ</span>
                          <span class="font-middle">Вакансии</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- ================================== -->
                  <div class="mywork-item">
                    <a href="https://vschetinin.ru/assets/demo/tesla/" target="_blank" class="grid-item work-item">
                      <div class="inner">
                        <div class="grid-item-image bg--cover"
                          style="background-image:url(/assets/images/cases/demo/tesla/tesla-logo.webp)"></div>
                        <div class="work-logo">
                          <span class="font-middle">Tesla</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- ================================== -->
                  <div class="mywork-item">
                    <a href="https://vschetinin.ru/assets/demo/cartrans/" target="_blank" class="grid-item work-item">
                      <div class="inner">
                        <div class="grid-item-image bg--cover"
                          style="background-image:url(/assets/images/cases/demo/cartrans/bg-cartrans.jpg.webp)"></div>
                        <div class="work-logo">
                          <span>Авто Логистик</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- ================================== -->
                  <div class="mywork-item">
                    <a href="https://vschetinin.ru/assets/demo/tellus/" target="_blank" class="grid-item work-item">
                      <div class="inner">
                        <div class="grid-item-image bg--cover"
                          style="background-image:url(/assets/images/cases/demo/tellus/prev.jpg.webp)"></div>
                        <div class="work-logo">
                          <span>TELLUS UTILITES</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- ================================== -->
                  <div class="mywork-item">
                    <a href="https://vschetinin.ru/assets/demo/fred/" target="_blank" class="grid-item work-item">
                      <div class="inner">
                        <div class="grid-item-image bg--cover"
                          style="background-image:url(/assets/images/cases/demo/fred/prev.jpg.webp)"></div>
                        <div class="work-logo">
                          <span>FRED</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- ================================== -->
                </div>
              </div>
            </div>
          </div>
          <!-- ======================== -->
          <div class="row element-animation-up">
            <div class="col-100">
              <article>
                <p>
                  Эти сайты — примеры, как мои решения делают бизнес заметным и удобным. Каждый проект оптимизирован для
                  скорости, мобильных устройств и конверсий, с
                  валидным кодом и адаптивными CMS-темами. Клиенты получили рост трафика и продаж благодаря
                  индивидуальному подходу. Хотите сайт, который привлечёт
                  клиентов и усилит ваш бренд? Давайте создадим решение, идеально подходящее для ваших задач.
                </p>
                <p>
                  <span class="color-white font-middle">Вдохновились примерами?</span> Свяжитесь для бесплатной
                  консультации, и мы вместе разработаем стратегию, которая
                  выведет ваш бизнес на новый уровень! Начните свой путь к результатам уже сегодня, обсудим ваши цели и
                  сделаем первый шаг!
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
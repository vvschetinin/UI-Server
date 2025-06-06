<?header('Content-type: text/html; charset=utf-8');?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <link rel="icon" type="image/svg+xml" href="/assets/images/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AI Tools | Блог</title>
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
            <h3 class="sectorname">Блог</h3>
            <h1 class="hero-title">Блог для бизнеса<span>Все про автоматизацию и маркетинг</span></h1>
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
      <section class="s-contacts section-inner bg-dark">
        <div class="container">
          <div class="row element-animation-up">
            <div class="col-100 col-md-10 col-lg-25"></div>
            <div class="col-100 col-md-90 col-lg-75 pr-3--md">
              <article class="contact-description text-right--md">
                <h2 class="h2-title deco-line">Раздел на реконструкции</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus neque eius, corrupti, rem, iste
                  reiciendis quidem voluptates magni soluta autem
                  repudiandae? Officia minima tenetur molestiae quos odio, unde ad aut nulla fugit? Incidunt,
                  consequatur!
                </p>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente eveniet eum non tempore rem,
                  quisquam quo iure deserunt vitae maxime perspiciatis
                  cum facilis.
                </p>
              </article>
              <div class="button-wrap text-right--md mt-3">
                <a href="/" class="view-btn">На главную страницу</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ================================================== -->

      <?php if (file_exists($root . "/template/shared/footer.php")): ?>
      <?php require_once $root . '/template/shared/footer.php';?>
      <?php endif;?>
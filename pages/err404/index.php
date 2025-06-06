<?header('Content-type: text/html; charset=utf-8');?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <link rel="icon" type="image/svg+xml" href="/assets/images/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AI Tools | Error 404</title>
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
      <section class="hero hero--error">
        <div class="hero-container">
          <div class="hero-content">
            <h3 class="sectorname">Error 404</h3>
            <h1 class="hero-title">Кажется, вы заблудились!</h1>
          </div>
        </div>
        <!-- Logo Circle -->
        <?php if (file_exists($root . "/interface/include/logo-circle.php")) : ?>
        <?php require $root . '/interface/include/logo-circle.php'; ?>
        <?php endif; ?>
        <!-- End Logo Circle -->
      </section>
      <section class="section-type bg-dark">
        <div class="container container--small">
          <div class="row element-animation-up">
            <div class="col-100 content-wrap">
              <h2>Запрошенная вами страница не существует</h2>
              <p class="mt-1">
                Это могло произойти из-за ввода неправильного URL-адреса, загрузки старой страницы из поисковой системы
                или попытки просмотреть страницу, которая была
                удалена.
              </p>
              <div class="button-wrap text-left mt-2 mt-3--lg">
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
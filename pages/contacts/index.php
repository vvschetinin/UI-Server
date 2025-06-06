<?header('Content-type: text/html; charset=utf-8');?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <link rel="icon" type="image/svg+xml" href="/assets/images/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AI Tools | Контакты</title>
  <script type="module" crossorigin src="/assets/scripts/main.js"></script>
  <link rel="stylesheet" crossorigin href="/assets/styles/main.css" />
  <?php if (file_exists($root . "/interface/seo/metrics.php")): ?>
  <?php require_once $root . '/interface/seo/metrics.php';?>
  <?php endif;?>
</head>

<body>
  <div class="site-wrapper">
    <?php if (file_exists($root . "/template/shared/header.php")): ?>
    <?php require_once $root . '/template/shared/header.php';?>
    <?php endif;?>
    <main class="site-content">
      <section class="hero hero--large flex items-center">
        <figure class="hero-media">
          <video class="hero-video" preload="auto" poster="/assets/images/hero/main-hero.jpg" loop muted playsinline
            autoplay controls>
            <source src="/assets/video/contacts/contact.mp4" type="video/mp4" />
          </video>
        </figure>
        <div class="hero-container">
          <div class="hero-content">
            <h3 class="sectorname">Контакты</h3>
            <h1 class="hero-title">Почему бы не попить кофе<span>и начать проект?</span></h1>
            <article class="hero-text">
              <p>
                Давайте обсудим, как можно вывести ваш бизнес на новый уровень! Просто напишите мне, и мы начнем с
                небольшой беседы за чашкой кофе.
                <span>Ваш успех ближе, чем кажется!</span>
              </p>
            </article>
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
                <h2 class="h2-title deco-line">У вас есть проект?</h2>
                <p>
                  Прошу предоставить краткое описание проекта / работ, которые вы задумали. Уточните масштаб проекта,
                  сроки и другие детали, которые считаете важными
                </p>
                <p>
                  Укажите свою контактную информацию, включая адрес электронной почты и номер телефона, а также другие
                  удобные для вас способы связи. Это можно сделать
                  через контактную форму, вызвав ее кнопкой "Свяжитесь со мной". Для пересылки файлов различных форматов
                  и изображений - прошу воспользоваться
                  электронной почтой.
                </p>
                <p>Я внимательно изучу предлагаемую задачу и свяжусь с вами в самые короткие сроки</p>
              </article>
              <div class="button-wrap text-right--md mt-3">
                <button class="start-project-btn display-inline-block js-startproject">Свяжитесь со мной</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ================================================== -->

      <?php if (file_exists($root . "/template/shared/footer.php")): ?>
      <?php require_once $root . '/template/shared/footer.php';?>
      <?php endif;?>
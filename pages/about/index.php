<?header('Content-type: text/html; charset=utf-8');?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <link rel="icon" type="image/svg+xml" href="/assets/images/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AI Tools | Обо мне</title>
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
            <h3 class="sectorname">Обо мне</h3>
            <h1 class="hero-title">Увлечение, ставшее профессией<span>От программирования к AI-решениям</span></h1>
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

      <section class="section-type s-about bg-dark">
        <div class="container--middle">
          <div class="row content-block element-animation-up">
            <div class="col-100 col-lg-35 col-xl-25">
              <h2 class="h2-title deco-line mb-1 mb-0--lg">Немного о себе</h2>
            </div>
            <div class="col-100 col-lg-65 col-xl-75">
              <p><?php echo $greeting; ?> <br />Меня зовут Владлен Щетинин.</p>
              <p>
                Я full-stack разработчик с опытом работы более 8 лет. За это время участвовал в более чем 30 проектах
                различной тематики и сложности. Увлечен
                возможностями автоматизации бизнес-процессов, и современными подходами в веб-разработке.
              </p>
              <p>
                К работе в IT пришел сначала как к интересному времяпровождению, соответствующему складу моего ума. Но
                это затягивает, и поражает бесконечностью
                возможностей, которую виртуальный мир способен дать любому из нас. Меня всегда привлекали технологии
                "переднего края", и их потенциал для решения
                нетривиальных задач. Именно поэтому я особое внимание уделяю возможностям интеграции AI в
                бизнес-процессы. Уверен, что искусственный интеллект способен
                принципиально изменить эти сферы деятельности.
              </p>
              <p>Cтараюсь поддерживать разумный баланс между работой и другими своими увлечениями и интересами, уделять
                время семье и общению с друзьями.</p>
            </div>
          </div>
          <!-- Картинки -->
          <div class="row content-block">
            <div class="col-100 about-grid">
              <div class="card card1 bg--cover" style="background-image:url(/assets/images/about/myfoto-1.webp)">
                <div class="textcard">
                  <p>Прыжок под парашютом</p>
                </div>
              </div>
              <div class="card card2 bg--cover" style="background-image:url(/assets/images/about/myfoto-2.webp)">
                <div class="textcard">
                  <p>Это я</p>
                </div>
              </div>
              <div class="card card3 bg--cover" style="background-image:url(/assets/images/about/myfoto-3.webp)">
                <div class="textcard">
                  <p>Мне нравится</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Картинки -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <p>
                Со временем я понял, что ИИ может радикально изменить бизнес-процессы. Углубившись в эту сферу, я освоил
                создание чат-ботов и AI-инструментов для SEO,
                чтобы помогать малому бизнесу достигать больших результатов. Моя цель — сделать технологии доступными
                для каждого предпринимателя
              </p>
              <h2 class="h2-title mt-2">Мой подход включает:</h2>
              <ul class="competences-list mt-1 mb-2">
                <li>Адаптацию проекта к вашим целям</li>
                <li>Техническую поддержку и обучение</li>
                <li>Измеримость полученного результата</li>
              </ul>
              <p>
                Я понимаю, с какими вызовами сталкивается малый бизнес в цифровом мире: ограниченные ресурсы, высокая
                конкуренция и нехватка времени. Именно поэтому я
                специализируюсь на доступных и эффективных ИИ-решениях, которые помогают вам расти без лишних затрат.
                Мой опыт в веб-разработке, в том числе чат-ботов и
                AI-SEO позволяет автоматизировать рутинные задачи, привлекать больше клиентов и увеличивать доходы. Я не
                просто предоставляю технологии — я способен
                создать решения, которые идеально подойдут именно вашему бизнесу.
              </p>
              <p>
                За годы работы я имел дело с десяткам малых бизнесов — от интернет-магазинов до локальных сервисов, и
                знаю их потребности. Я верю, что технологии должны
                быть простыми, понятными и приносить реальную пользу. Давайте вместе сделаем ваш бизнес более
                эффективным и успешным!
              </p>
              <p>Открыт к сотрудничеству с компаниями, реализующими проекты с использованием AI.</p>
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
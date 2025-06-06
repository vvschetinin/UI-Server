<?header('Content-type: text/html; charset=utf-8');?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <link rel="icon" type="image/svg+xml" href="/assets/images/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AI Tools | Вопросы</title>
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
            <h3 class="sectorname">FAQ</h3>
            <h1 class="hero-title">Часто задаваемые вопросы<span>Полезная информация перед стартом</span></h1>
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

      <section class="section-type s-faq bg-dark">
        <div class="container--middle">
          <div class="row content-block element-animation-up">
            <div class="col-100 col-lg-35 col-xl-25">
              <h2 class="h2-title deco-line mb-1 mb-0--lg">Вопросы и ответы</h2>
            </div>
            <div class="col-100 col-lg-65 col-xl-75">
              <p>
                Ищете, как усилить бизнес с помощью контента, SEO или автоматизации? Раздел FAQ создан, чтобы ответить
                на ключевые вопросы о моих услугах и показать,
                как они решают ваши задачи. Узнайте о сроках, процессе работы, выгодах и технических аспектах, чтобы
                принять уверенное решение. Ознакомьтесь с ответами,
                чтобы с чётким пониманием начать преобразование бизнеса и достичь роста, экономя время и ресурсы!
              </p>
              <p>Если у вас остануться вопросы - свяжитесь со мной для консультации, и я помогу найти идеальное решение
                для вашего успеха!</p>
            </div>
          </div>
          <div class="row">
            <div class="col-100 col-xl-80">
              <ul class="faq-list">
                <li>
                  <h2 class="faq-question" tabindex="0">Как быстро SEO выведет мой сайт в топ?</h2>
                  <div class="faq-answer">
                    <p>
                      Оптимизирую ваш сайт для Google и Яндекс, чтобы поднять позиции за 2–3 месяца. Первые улучшения
                      трафика заметны через 4–6 недель, в зависимости от
                      конкуренции. Адаптирую стратегию под ваш бизнес, чтобы обеспечить стабильный рост. Свяжитесь,
                      чтобы обсудить ваш проект и ускорить результаты!
                    </p>
                  </div>
                </li>
                <li>
                  <h2 class="faq-question" tabindex="0">Как проходит работа над проектом?</h2>
                  <div class="faq-answer">
                    <p>
                      Анализирую ваши цели, предлагаю чёткий план, выполняю задачи и предоставляю отчёты. Вы всегда в
                      курсе прогресса, а я на связи для вопросов и
                      правок. Такой подход гарантирует, что решения соответствуют вашим задачам. Начните с консультации,
                      чтобы обсудить детали!
                    </p>
                  </div>
                </li>
                <li>
                  <h2 class="faq-question" tabindex="0">Сколько стоят ваши услуги?</h2>
                  <div class="faq-answer">
                    <p>
                      Стоимость зависит от задач и объёма работы, например, сложности SEO или настройки чат-ботов.
                      Предлагаю индивидуальные решения, чтобы уложиться в
                      ваш бюджет. Свяжитесь для консультации, и я подготовлю прозрачное предложение, которое обеспечит
                      максимальную выгоду для вашего бизнеса.
                    </p>
                  </div>
                </li>
                <li>
                  <h2 class="faq-question" tabindex="0">Как услуги адаптируются под мой бизнес?</h2>
                  <div class="faq-answer">
                    <p>
                      Изучаю ваш бренд и цели, чтобы контент, SEO или чат-боты работали именно для вашей аудитории.
                      Персонализированные решения усиливают бренд,
                      повышают конверсии и экономят время. Расскажите о задачах, и я предложу подход, который идеально
                      подойдёт вашему бизнесу!
                    </p>
                  </div>
                </li>
                <li>
                  <h2 class="faq-question" tabindex="0">Как работают AI-чат-боты для моего сайта?</h2>
                  <div class="faq-answer">
                    <p>
                      Разрабатываю чат-боты, которые общаются с клиентами 24/7, автоматизируют заказы и собирают отзывы.
                      Интегрирую их с сайтом, соцсетями или
                      мессенджерами, обеспечивая удобство. Это повышает лояльность и продажи. Хотите узнать больше?
                      Свяжитесь, чтобы обсудить ваш проект!
                    </p>
                  </div>
                </li>
                <li>
                  <h2 class="faq-question" tabindex="0">Будет ли поддержка после запуска услуги?</h2>
                  <div class="faq-answer">
                    <p>
                      Обеспечиваю поддержку после запуска, будь то обновление контента, мониторинг SEO или настройка
                      чат-ботов. Предоставляю рекомендации и
                      корректировки, чтобы результаты росли. Свяжитесь, чтобы обсудить, как я помогу вашему бизнесу
                      поддерживать успех в долгосрочной перспективе!
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-100 col-xl-80">
              <article class="bottom-text mt-3 pt-0 pt-1--lg">
                <p>
                  Не нашли ответа? Свяжитесь для бесплатной консультации, и я помогу выбрать решения, которые выведут
                  ваш бизнес на новый уровень. Давайте обсудим ваши
                  цели прямо сейчас!
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
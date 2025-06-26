<?header('Content-type: text/html; charset=utf-8');?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Add Icons -->
  <link rel="icon" type="image/ico" href="/favicon.ico">
  <link rel="apple-touch-icon" sizes="160x160" href="/apple-touch-icon.png">
  <!-- Add Title + Meta -->
  <?php if (file_exists($root . "/interface/seo/headtitle.php")): ?>
  <?php require_once $root . '/interface/seo/headtitle.php';?>
  <?php endif;?>
  <!-- Add Styles -->
  <link rel="stylesheet" crossorigin href="/assets/styles/main.css">
  <!-- Add Metrics -->
</head>

<body>
  <div class="site-wrapper">
    <?php if (file_exists($root . "/template/shared/header-inner.php")): ?>
    <?php require_once $root . '/template/shared/header-inner.php';?>
    <?php endif;?>
    <main class="site-content">


      <section class="section-inner bg-dark">
        <div class="container--middle">
          <div class="row element-animation-up">
            <div class="col-100">
              <div class="hero-inner">
                <h1 class="h1-inner deco-line mb-0">
                  Верстка по дизайну для CMS
                  <span>Адаптивность и готовность к интеграции</span>
                </h1>
              </div>
              <p>
                Нужна верстка, которая оживит ваш дизайн и легко интегрируется в CMS? Закажите создание адаптивную,
                валидную верстку с базовой SEO-оптимизацией,
                реализующую самые современные практики и плагины. Она идеально работает на всех устройствах,
                загружается быстро и готова для интеграции в 1С-Битрикс,
                WordPress или другие CMS. Свяжитесь, чтобы превратить ваш дизайн в функциональный сайт, привлекающий
                клиентов и усиливающий бизнес!
              </p>
            </div>
          </div>
          <!-- Step position -->
          <div class="row mt-2">
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Адаптивность на всех устройствах</h3>
                <p>
                  Темы идеально подстраиваются под смартфоны, планшеты и ПК, привлекая больше мобильного трафика. Это
                  улучшает пользовательский опыт и повышает позиции
                  в Google.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Валидный и чистый код</h3>
                <p>Код соответствует стандартам W3C, минимизируя ошибки. Это гарантирует стабильность сайта и
                  совместимость с браузерами.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Базовая SEO-оптимизация</h3>
                <p>Встраиваю SEO-дружелюбную структуру и метаданные, чтобы сайт лучше ранжировался и привлекал больше
                  органического трафика.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Готовность к CMS-интеграции</h3>
                <p>Верстка оптимизирована для легкой интеграции в CMS с использованием плагинов, упрощая управление
                  контентом и функциональность.</p>
              </article>
            </div>
          </div>
          <!-- Для кого услуга -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h2-title deco-line">Кому подойдут услуги верстки для CMS</h2>
                <p>
                  Эта услуга идеальна для бизнеса и дизайнеров с готовым дизайном или устаревшим сайтом. Малый бизнес?
                  Создам адаптивную верстку для роста клиентов.
                  Интернет-магазины? Разработаю удобный каталог для продаж. Стартапы? Подготовлю стильный сайт для
                  запуска. Дизайнеры? Обеспечу CMS-интеграцию. Нужен
                  рефакторинг? Обновлю верстку для скорости и валидности. Свяжитесь, чтобы оживить дизайн или
                  модернизировать сайт и значительно усилить бизнес!
                </p>
              </article>
            </div>
          </div>
          <!-- Услуга детально -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h2-title deco-line">Что входит в создание верстки для CMS</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Адаптивная верстка</h3>
                <p>
                  Создаю верстку, которая идеально отображается на всех устройствах, от смартфонов до ПК. Тестирую на
                  разных экранах, чтобы гарантировать удобство и
                  функциональность.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Валидный код по стандартам</h3>
                <p>
                  Пишу чистый код на HTML5 и CSS3, соответствующий W3C. Применяю оптимизацию изображений. Это устраняет
                  ошибки, улучшает совместимость и ускоряет
                  загрузку сайта.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Базовая SEO-оптимизация</h3>
                <p>Встраиваю семантическую разметку, метаданные и правильную структуру, чтобы сайт был готов к SEO и
                  привлекал больше трафика из поисковиков.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Подготовка для CMS-интеграции</h3>
                <p>Оптимизирую верстку для 1С-Битрикс, WordPress или других CMS, подключая плагины для упрощения
                  управления контентом и добавления функций.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Использование современных подходов</h3>
                <p>
                  Применяю CSS Grid, Flexbox, ES6 JavaScript и оптимизированные ресурсы, чтобы верстка была быстрой,
                  гибкой и соответствовала современным практикам.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Подключение плагинов</h3>
                <p>Интегрирую плагины для CMS (например, для форм, слайдеров или SEO), чтобы расширить функциональность
                  и упростить настройку сайта.</p>
              </article>
            </div>
          </div>
          <!-- Призыв к действию -->
          <div class="row mt-3">
            <div class="col-100">
              <article>
                <h2 class="p-article color-white font-middle mb-0">Готовы оживить дизайн своего сайта?</h2>
                <p>
                  Получите адаптивную, валидную верстку, готовую для CMS, которая усилит ваш сайт и привлечет клиентов!
                  Я создам решение, идеально подходящее вашему
                  бизнесу, с современной версткой и базовым SEO. Свяжитесь для консультации, и мы начнем превращать ваш
                  дизайн в функциональный сайт уже сегодня!
                </p>
              </article>
              <!-- Блок кнопок -->
              <div class="button-wrap flex justify-center mt-2 mt-3--lg">
                <button class="start-project-btn display-inline-block js-startproject">Получить консультацию</button>
              </div>
              <div class="revers-list flex justify-center justify-start--sm mt-3">
                <a href="/services/" class="hover-rotate">Назад к списку услуг</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ================================================== -->

      <?php if (file_exists($root . "/template/shared/footer.php")): ?>
      <?php require_once $root . '/template/shared/footer.php';?>
      <?php endif;?>

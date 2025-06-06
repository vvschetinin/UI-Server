<?header('Content-type: text/html; charset=utf-8');?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <link rel="icon" type="image/svg+xml" href="/assets/images/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AI SEO</title>
  <script type="module" crossorigin src="/assets/scripts/main.js"></script>
  <link rel="stylesheet" crossorigin href="/assets/styles/main.css" />
</head>

<body>
  <div class="site-wrapper">
    <header class="header header--small">
      <div class="header-wrapper">
        <div class="header-container static--xl">
          <a class="header-logo svg" href="/">
            <svg class="logo-svg" viewBox="0 0 230 161" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M26.6051 120.606L32.5848 112.814C30.5049 111.255 28.5117 109.524 26.6485 107.619C19.2389 100.216 14.1259 91.1255 11.6127 81.2554L2.59985 85.4978C6.58629 99.6536 15.1658 111.905 26.6051 120.606Z"
                fill="url(#paint0_linear)" />
              <path
                d="M69.3726 130.909L68.4627 121.125C65.8628 121.385 63.2196 121.428 60.5765 121.342C50.0904 120.909 40.1676 117.706 31.6315 112.121L27.8617 121.342C40.4276 129.047 55.0735 132.294 69.3726 130.909Z"
                fill="url(#paint1_linear)" />
              <path
                d="M0 67.0997C0 73.4633 0.909947 79.6105 2.55652 85.4546L11.5693 81.2122C10.3994 76.6668 9.8361 71.9049 9.8361 67.0997C9.8361 58.0953 11.916 49.394 15.8157 41.5585L7.23625 36.7966C2.59985 45.8875 0 56.1906 0 67.0997Z"
                fill="url(#paint2_linear)" />
              <path
                d="M7.23627 36.7964L15.8158 41.5583C18.5456 36.1038 22.1854 31.0389 26.6051 26.58C31.6315 21.5583 37.4379 17.5756 43.7642 14.7618L38.6078 6.36353C25.0452 12.7272 13.9959 23.4631 7.23627 36.7964Z"
                fill="url(#paint3_linear)" />
              <path
                d="M67.1628 0C56.9367 0 47.274 2.29437 38.6078 6.36364L43.7642 14.7619C51.0437 11.5152 58.9733 9.82684 67.1628 9.82684C73.7058 9.82684 80.0754 10.9091 86.0984 12.987L89.2182 3.67965C82.2853 1.2987 74.8757 0 67.1628 0Z"
                fill="url(#paint4_linear)" />
              <path
                d="M89.2181 3.7229L86.0983 12.987C94.1579 15.8008 101.524 20.3896 107.72 26.58C110.364 29.2207 112.703 32.0779 114.74 35.1082L122.756 29.4805C114.74 17.619 102.997 8.48481 89.2181 3.7229Z"
                fill="url(#paint5_linear)" />
              <path
                d="M134.326 67.0995C134.326 53.1601 130.079 40.2164 122.756 29.4805L114.74 35.1082C121.066 44.5021 124.489 55.5411 124.489 67.0995H134.326Z"
                fill="url(#paint6_linear)" />
              <path
                d="M87.3983 13.2468C90.1264 13.2468 92.338 11.0373 92.338 8.31177C92.338 5.58621 90.1264 3.37671 87.3983 3.37671C84.6701 3.37671 82.4586 5.58621 82.4586 8.31177C82.4586 11.0373 84.6701 13.2468 87.3983 13.2468Z"
                fill="#E84F1C" />
              <path
                d="M118.726 37.2727C121.455 37.2727 123.666 35.0632 123.666 32.3377C123.666 29.6121 121.455 27.4026 118.726 27.4026C115.998 27.4026 113.787 29.6121 113.787 32.3377C113.787 35.0632 115.998 37.2727 118.726 37.2727Z"
                fill="#DE0030" />
              <path
                d="M129.386 72.0347C132.114 72.0347 134.326 69.8252 134.326 67.0996C134.326 64.3741 132.114 62.1646 129.386 62.1646C126.658 62.1646 124.446 64.3741 124.446 67.0996C124.446 69.8252 126.658 72.0347 129.386 72.0347Z"
                fill="#7D051F" />
              <path
                d="M40.861 15.7144C43.5891 15.7144 45.8007 13.5049 45.8007 10.7793C45.8007 8.05374 43.5891 5.84424 40.861 5.84424C38.1329 5.84424 35.9213 8.05374 35.9213 10.7793C35.9213 13.5049 38.1329 15.7144 40.861 15.7144Z"
                fill="#009E00" />
              <path
                d="M11.266 44.8052C13.9941 44.8052 16.2057 42.5957 16.2057 39.8701C16.2057 37.1446 13.9941 34.9351 11.266 34.9351C8.53788 34.9351 6.32629 37.1446 6.32629 39.8701C6.32629 42.5957 8.53788 44.8052 11.266 44.8052Z"
                fill="#1CD4BD" />
              <path
                d="M7.06288 88.1384C9.79101 88.1384 12.0026 85.9289 12.0026 83.2034C12.0026 80.4778 9.79101 78.2683 7.06288 78.2683C4.33475 78.2683 2.12317 80.4778 2.12317 83.2034C2.12317 85.9289 4.33475 88.1384 7.06288 88.1384Z"
                fill="#0054E8" />
              <path
                d="M29.7249 121.688C32.4531 121.688 34.6646 119.479 34.6646 116.753C34.6646 114.028 32.4531 111.818 29.7249 111.818C26.9968 111.818 24.7852 114.028 24.7852 116.753C24.7852 119.479 26.9968 121.688 29.7249 121.688Z"
                fill="#362196" />
              <path
                d="M80.5087 79.1774L69.936 63.593C69.156 62.2077 67.6828 61.2554 65.9495 61.2554C63.4363 61.2554 61.3998 63.29 61.3998 65.8008C61.3998 67.4458 62.2664 68.8744 63.5663 69.6536L79.3388 80.303C80.1187 80.8225 81.0287 79.9567 80.5087 79.1774Z"
                fill="white" />
              <defs>
                <lineargradient id="paint0_linear" x1="6.04283" y1="84.1438" x2="28.5536" y2="118.823"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#0054E8" stop-opacity="0.8" />
                  <stop offset="1" stop-color="#0054E8" stop-opacity="0" />
                </lineargradient>
                <lineargradient id="paint1_linear" x1="29.5338" y1="118.018" x2="69.611" y2="128.277"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#362196" stop-opacity="0.8" />
                  <stop offset="1" stop-color="#362196" stop-opacity="0" />
                </lineargradient>
                <lineargradient id="paint2_linear" x1="8.84954" y1="38.8607" x2="5.91492" y2="83.5082"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#1CD4BD" stop-opacity="0.8" />
                  <stop offset="1" stop-color="#1CD4BD" stop-opacity="0" />
                </lineargradient>
                <lineargradient id="paint3_linear" x1="39.4887" y1="9.39708" x2="11.4865" y2="37.6217"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#009E00" stop-opacity="0.8" />
                  <stop offset="1" stop-color="#009E00" stop-opacity="0" />
                </lineargradient>
                <lineargradient id="paint4_linear" x1="87.7165" y1="7.38467" x2="41.6552" y2="7.38467"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#E84F1C" stop-opacity="0.8" />
                  <stop offset="1" stop-color="#E84F1C" stop-opacity="0" />
                </lineargradient>
                <lineargradient id="paint5_linear" x1="119.886" y1="30.8421" x2="89.3295" y2="7.90342"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#DE0030" stop-opacity="0.8" />
                  <stop offset="1" stop-color="#DE0030" stop-opacity="0" />
                </lineargradient>
                <lineargradient id="paint6_linear" x1="130.778" y1="66.2393" x2="119.82" y2="31.3772"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#7D051F" stop-opacity="0.8" />
                  <stop offset="1" stop-color="#7D051F" stop-opacity="0" />
                </lineargradient>
              </defs>
              <text class="svg-title" x="140" y="124" fill="white" text-anchor="middle">AI Tools</text>
            </svg>
          </a>

          <nav class="desktop-nav display-none display-table--lg">
            <ul class="menu-desktop">
              <li class="menu-item"><a href="/services/">Услуги</a></li>
              <li class="menu-item">
                <a href="/cases/">Кейсы и результаты</a>
              </li>
              <li class="menu-item"><a href="/about/">Обо мне</a></li>
              <li class="menu-item"><a href="/blog/">Блог</a></li>
              <li class="menu-item"><a href="/faq/">FAQ</a></li>
              <li class="menu-item">
                <a href="/contacts/">Контакты</a>
              </li>
            </ul>
          </nav>

          <div class="button-wrap">
            <button class="start-project-btn display-none display-inline-block--sm js-startproject">Свяжитесь со
              мной</button>
          </div>

          <div class="header-right">
            <button class="nav-toggle display-block display-none--lg">
              <span class="nav-toggle__line"></span>
              <span class="nav-toggle__line"></span>
              <span class="nav-toggle__line"></span>
            </button>
          </div>
        </div>
      </div>
      <nav class="header-nav">
        <div class="header-nav--inner">
          <ul class="menu-mobil">
            <li class="menu-item"><a href="/">Главная</a></li>
            <li class="menu-item"><a href="/services/">Услуги</a></li>
            <li class="menu-item">
              <a href="/cases/">Кейсы и результаты</a>
            </li>
            <li class="menu-item"><a href="/about/">Обо мне</a></li>
            <li class="menu-item"><a href="/blog/">Блог</a></li>
            <li class="menu-item"><a href="/faq/">FAQ</a></li>
            <li class="menu-item"><a href="/contacts/">Контакты</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <main class="site-content">
      <section class="section-inner bg-dark">
        <div class="container--middle">
          <div class="row element-animation-up">
            <div class="col-100">
              <div class="hero-inner">
                <h3 class="sectorname">SMART SEO</h3>
                <h1 class="h1-inner">SEO для роста трафика<span>Умная оптимизация для максимального охвата</span></h1>
              </div>
              <article>
                <p>
                  Хотите, чтобы ваш сайт привлекал больше клиентов из поиска? Использую передовые SEO-инструменты, чтобы
                  обойти конкурентов и вывести сайт на топовые
                  позиции в Google и Яндекс. Анализирую тренды, подбираю эффективные ключевые слова, оптимизирую контент
                  и технические аспекты. С моим SEO вы получите
                  рост органического трафика и конверсий, фокусируясь на запросах, приносящих результат. Экономьте на
                  рекламе, привлекайте целевую аудиторию и
                  масштабируйте бизнес. Начните уже сегодня — ваш успех в поиске всего в одном клике!
                </p>
              </article>
            </div>
          </div>
          <!-- Step position -->
          <div class="row mt-2">
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Рост органического трафика</h3>
                <p>
                  Оптимизирую ваш сайт для Google и Яндекс, привлекая больше посетителей. Это увеличивает поток целевых
                  клиентов, повышает видимость бренда и
                  обеспечивает стабильный рост без лишних затрат на рекламу, укрепляя позиции вашего бизнеса.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Топовые позиции в поиске</h3>
                <p>
                  Вывожу сайт на первые страницы Google и Яндекс с помощью продуманной стратегии и актуальных методов.
                  Высокие позиции привлекают больше кликов,
                  укрепляют доверие к бренду и дают конкурентное преимущество.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Увеличение конверсий</h3>
                <p>
                  Создаю оптимизированный контент и структуру сайта, превращающие посетителей в клиентов. Мое
                  SEO-продвижение повышает вовлечённость, улучшает
                  пользовательский опыт и увеличивает продажи или заявки, помогая достигать бизнес-целей.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Долгосрочный результат</h3>
                <p>
                  Применяю SEO-методы, обеспечивающие устойчивый рост трафика и позиций. Формирую фундамент для
                  долгосрочного успеха, чтобы ваш сайт оставался на
                  вершине, привлекая клиентов даже спустя месяцы.
                </p>
              </article>
            </div>
          </div>
          <!-- Для кого услуга -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h2-title deco-line">Кому нужно SEO-продвижение</h2>
                <p>
                  Услуга SEO-продвижения создана для тех, кто хочет привлечь больше клиентов онлайн. Интернет-магазины?
                  Оптимизирую страницы для роста трафика и продаж.
                  Локальный бизнес, например, кафе или салоны? Настрою локальное SEO для привлечения клиентов из вашего
                  региона. Стартапы? Выведу новый бренд в топ
                  поиска без больших бюджетов. B2B-компании? Усилю видимость для целевых запросов, увеличивая заявки.
                  Если стремитесь повысить позиции в Google и
                  Яндекс, увеличить поток клиентов и укрепить бренд, моё SEO — ваш инструмент успеха. Адаптирую
                  стратегию под ваши задачи, чтобы обеспечить максимум
                  трафика и конверсий. Начните продвижение сегодня и сделайте сайт лидером поиска!
                </p>
              </article>
            </div>
          </div>
          <!-- Услуга детально -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h2-title deco-line">Что входит в SEO-продвижение</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Аудит сайта</h3>
                <p>
                  Анализирую ваш сайт, выявляя технические ошибки, слабые места и возможности для роста. Это создаёт
                  основу для эффективной стратегии, которая выводит
                  сайт в топ поиска и укрепляет его позиции.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Оптимизация контента</h3>
                <p>
                  Разрабатываю и улучшаю тексты, заголовки и мета-теги, чтобы они соответствовали запросам аудитории и
                  алгоритмам Google и Яндекс. Это привлекает больше
                  трафика и повышает позиции сайта.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Техническая оптимизация</h3>
                <p>
                  Устраняю ошибки, ускоряю загрузку сайта и улучшаю его структуру. Это повышает удобство для
                  пользователей, снижает отказы и помогает поисковикам лучше
                  индексировать ваш сайт.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Работа с внешними ссылками</h3>
                <p>
                  Формирую стратегию получения качественных ссылок, чтобы повысить авторитет сайта. Это укрепляет
                  позиции в поиске и привлекает больше целевых
                  посетителей к вашему бизнесу.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Мониторинг и аналитика</h3>
                <p>
                  Отслеживаю позиции, трафик и конверсии, предоставляя регулярные отчёты. Это позволяет корректировать
                  стратегию, чтобы сайт стабильно рос и приносил
                  больше клиентов.
                </p>
              </article>
            </div>
          </div>
          <!-- Призыв к действию -->
          <div class="row mt-3">
            <div class="col-100">
              <article>
                <p>
                  <span class="color-white font-middle">Готовы к топу поиска?</span> Запустите SEO-продвижение и
                  привлеките больше клиентов! Выведите сайт на первые
                  позиции Google и Яндекс, увеличив трафик и конверсии. Свяжитесь со мной для консультации — ваш успех
                  начинается сейчас!
                </p>
              </article>
              <!-- Блок кнопок -->
              <div class="button-wrap flex justify-center mt-2 mt-3--lg">
                <button class="start-project-btn display-inline-block js-startproject">Получить консультацию</button>
              </div>
              <a href="/services/" class="hover-rotate mt-2 mt-3--sm">Назад к списку услуг</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- ================================================== -->

    <?php if (file_exists($root . "/template/shared/footer.php")): ?>
    <?php require_once $root . '/template/shared/footer.php';?>
    <?php endif;?>

  </div>

  <?php if (file_exists($root . "/template/forms/fixedcontact.php")): ?>
  <?php require_once $root . '/template/forms/fixedcontact.php';?>
  <?php endif;?>

  <?php if (file_exists($root . "/template/forms/mainform.php")): ?>
  <?php require_once $root . '/template/forms/mainform.php';?>
  <?php endif;?>

</body>

</html>

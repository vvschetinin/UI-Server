<header class="header header--small">
  <div class="header-wrapper">
    <div class="header-container static--xl">
      <!-- LOGOTYPE -->
      <?php if ($_SERVER["REQUEST_URI"] == '/') : ?>
      <span class="header-logo svg">
        <?php if (file_exists($root . "/interface/include/logo.php")) : ?>
        <?php require $root . '/interface/include/logo.php'; ?>
        <?php endif; ?>
      </span>
      <?php else : ?>
      <a class="header-logo svg" href="/">
        <?php if (file_exists($root . "/interface/include/logo.php")) : ?>
        <?php require $root . '/interface/include/logo.php'; ?>
        <?php endif; ?>
      </a>
      <?php endif; ?>
      <!-- Desktop Nav -->
      <nav class="desktop-nav display-none display-table--lg">
        <?php if (file_exists($root . "/interface/include/desktop-menu.php")) : ?>
        <?php require_once $root . '/interface/include/desktop-menu.php'; ?>
        <?php endif; ?>
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
      <?php if (file_exists($root . "/interface/include/mobil-menu.php")) : ?>
      <?php require_once $root . '/interface/include/mobil-menu.php'; ?>
      <?php endif; ?>
    </div>
  </nav>
</header>
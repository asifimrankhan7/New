<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Aaron Holmes Residential | London & UK Property Experts</title>
  <meta name="description"
    content="Aaron Holmes Residential — award-winning estate agency based in Ilford. Residential sales, lettings, mortgages and conveyancing across East London and Essex." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,600&family=Inter:wght@300;400;500;600&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <script>
    // Gallery data needed by the lightbox in script.js
    window.GALLERY_IMGS = <?= json_encode($GALLERY_IMGS) ?>;
  </script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <script src="script.js" defer></script>
</head>

<body>
  <?php $routeBase = 'index.php?page='; ?>
  <!-- PAGE LOADER -->
  <div id="loader">
    <div class="loader-left">
      <div class="loader-eyebrow">Est. 2014 &nbsp;&mdash;&nbsp; Gants Hill, London</div>
      <div class="loader-brand serif">Aaron Holmes<br/><em>Residential</em></div>
      <div class="loader-service">Residential Sales &bull; Lettings &bull; Mortgages</div>
      <div class="loader-progress">
        <div class="loader-bar"><div class="loader-bar-fill"></div></div>
        <span class="loader-pct" id="loader-pct">0%</span>
      </div>
    </div>
    <div class="loader-right">
      <div class="loader-right-line"></div>
    </div>
  </div>

  <!-- COOKIE DIALOG -->
  <div id="cookie-dialog" class="cookie-dialog">
    <div class="cookie-content">
      <div class="cookie-header">
        <h3 class="serif">Cookie Preferences</h3>
        <p>We use cookies to ensure you get the best experience on our website. By continuing to browse, we'll assume you're happy with our use of cookies.</p>
      </div>
      
      <div id="cookie-settings" class="cookie-settings">
        <div class="setting-item">
          <div class="setting-info">
            <span class="setting-name">Essential</span>
            <span class="setting-desc">Necessary for the website to function properly.</span>
          </div>
          <div class="setting-toggle">
            <input type="checkbox" checked disabled>
            <span class="toggle-slider"></span>
          </div>
        </div>
        <div class="setting-item">
          <div class="setting-info">
            <span class="setting-name">Analytics</span>
            <span class="setting-desc">Help us understand how visitors interact with the site.</span>
          </div>
          <div class="setting-toggle">
            <input type="checkbox" id="cookie-analytics" checked>
            <span class="toggle-slider"></span>
          </div>
        </div>
        <div class="setting-item">
          <div class="setting-info">
            <span class="setting-name">Marketing</span>
            <span class="setting-desc">Used to deliver relevant advertisements to you.</span>
          </div>
          <div class="setting-toggle">
            <input type="checkbox" id="cookie-marketing">
            <span class="toggle-slider"></span>
          </div>
        </div>
      </div>

      <div class="cookie-footer">
        <button id="cookie-manage" type="button" class="btn-outline">Manage Settings</button>
        <div class="cookie-main-actions">
          <button id="cookie-decline" type="button" class="btn-outline">Decline All</button>
          <button id="cookie-accept" type="button" class="btn-dark">Accept All</button>
          <button id="cookie-save" type="button" class="btn-dark" style="display: none;">Save Preferences</button>
        </div>
      </div>
    </div>
  </div>

  <!-- BACK TO TOP -->
  <div id="btt" title="Back to top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">
    <i data-lucide="chevron-up"></i>
  </div>

  <!-- TOAST -->
  <div id="toast"></div>

  <!-- MOBILE MENU -->
  <div id="mobile-menu">
    <div class="mob-head">
      <span class="mob-logo"><img src="images/logo.webp" alt="Aaron Holmes Residential" /></span>
      <span class="mob-close" onclick="closeMob()">✕</span>
    </div>
    <nav class="mob-nav">
      <a href="<?= $routeBase ?>home">Home</a>
      <a href="<?= $routeBase ?>properties">For Sale</a>
      <a href="<?= $routeBase ?>contact">Lettings</a>
      <a href="<?= $routeBase ?>about">About Us</a>
      <a href="<?= $routeBase ?>offices">Consultant & Mentorship</a>
      <a href="<?= $routeBase ?>insights">Testimonial</a>
      <a href="<?= $routeBase ?>contact">Contact Us</a>
    </nav>
  </div>

  <!-- HEADER UNIT (Topbar + Main Nav) -->
  <div id="main-nav-unit" class="header-unit">
    <!-- TOPBAR -->
    <div class="topbar">
      <div class="wrap">
        <div class="topbar-left">
          <i data-lucide="globe" style="width: 13px; height: 13px;"></i>
          <span>United Kingdom</span>
        </div>
        <div class="topbar-right">
          <a href="<?= $routeBase ?>about">About us</a>
          <a href="<?= $routeBase ?>contact">Contact us</a>
          <a href="<?= $routeBase ?>about">Careers</a>
        </div>
      </div>
    </div>

    <!-- MAIN NAVBAR (Logo Section + Nav Menu) -->
    <header id="nav-top" class="header-top">
      <div class="nav-wrap">
        <a class="nav-logo" href="<?= $routeBase ?>home">
          <img src="images/logo.webp" alt="Noble Estates" />
        </a>

        <nav class="nav-menu">
          <div class="nav-item">
            <a class="nav-link" href="<?= $routeBase ?>home">Home</a>
          </div>
          <div class="nav-item">
            <a class="nav-link" href="<?= $routeBase ?>properties">Properties</a>
          </div>
          <div class="nav-item has-dropdown">
            <a class="nav-link" href="<?= $routeBase ?>contact">Services <span class="arr">▾</span></a>
            <div class="nav-dropdown">
              <a href="<?= $routeBase ?>properties">Residential Sales</a>
              <a href="<?= $routeBase ?>contact">Lettings</a>
              <a href="<?= $routeBase ?>contact">Mortgages</a>
              <a href="<?= $routeBase ?>contact">Conveyancing</a>
              <a href="<?= $routeBase ?>contact">Mentorship</a>
            </div>
          </div>
          <div class="nav-item">
            <a class="nav-link" href="<?= $routeBase ?>insights">Insights</a>
          </div>
          <div class="nav-item">
            <a class="nav-link" href="<?= $routeBase ?>about">About Us</a>
          </div>
          <div class="nav-item">
            <a class="nav-link" href="<?= $routeBase ?>contact">Contact</a>
          </div>
        </nav>

        <div class="nav-right">
          <div class="nav-hamburger" onclick="openMob()">
            <span></span><span></span><span></span>
          </div>
        </div>
      </div>
    </header>
  </div>

  <!-- FLOATING CTA -->
  <a class="floating-cta" href="<?= $routeBase ?>contact">
    Request Valuation
  </a>
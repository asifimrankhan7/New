<?php $routeBase = 'index.php?page='; ?>
<!-- PAGE LOADER -->
<div id="loader">
  <div class="loader-left">
    <div class="loader-eyebrow">Est. 2014 &nbsp;&mdash;&nbsp; Gants Hill, London</div>
    <div class="loader-brand serif">Aaron Holmes<br /><em>Residential</em></div>
    <div class="loader-service">Residential Sales &bull; Lettings &bull; Mortgages</div>
    <div class="loader-progress">
      <div class="loader-bar">
        <div class="loader-bar-fill"></div>
      </div>
      <span class="loader-pct" id="loader-pct">0%</span>
    </div>
  </div>
  <div class="loader-right">
    <div class="loader-right-line"></div>
  </div>
</div>



<!-- MOBILE MENU -->
<div id="mobile-menu">
  <div class="mob-head">
    <span class="mob-logo"><img src="images/logo.webp" alt="Aaron Holmes Residential" /></span>
    <span class="mob-close" onclick="closeMob()">✕</span>
  </div>
  <nav class="mob-nav">
    <div class="mob-nav-item">
      <a href="<?= $routeBase ?>home">Home</a>
    </div>
    <div class="mob-nav-item">
      <a href="<?= $routeBase ?>properties">Properties</a>
    </div>
    <div class="mob-nav-item has-mob-dropdown">
      <div class="mob-nav-link-wrap">
        <a href="<?= $routeBase ?>contact">Services</a>
        <span class="mob-drop-trigger"><i class="ph-light ph-caret-down"></i></span>
      </div>
      <div class="mob-dropdown">
        <a href="<?= $routeBase ?>properties">Residential Sales</a>
        <a href="<?= $routeBase ?>contact">Lettings</a>
        <a href="<?= $routeBase ?>contact">Mortgages</a>
        <a href="<?= $routeBase ?>contact">Conveyancing</a>
        <a href="<?= $routeBase ?>offices">Consultant & Mentorship</a>
      </div>
    </div>
    <div class="mob-nav-item">
      <a href="<?= $routeBase ?>insights">Insights</a>
    </div>
    <div class="mob-nav-item">
      <a href="<?= $routeBase ?>about">About Us</a>
    </div>
    <div class="mob-nav-item">
      <a href="<?= $routeBase ?>contact">Contact</a>
    </div>
  </nav>
</div>

<!-- HEADER UNIT (Topbar + Main Nav) -->
<div id="main-nav-unit" class="header-unit">
  <!-- TOPBAR -->
  <div class="topbar">
    <div class="wrap">
      <div class="topbar-left">
        <i class="ph-light ph-globe" style="font-size: 14px;"></i>
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
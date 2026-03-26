<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Noble Estates | London & UK Luxury Property Experts</title>
  <meta name="description"
    content="Noble Estates — London's premier luxury estate agency. Find exclusive properties for sale and rent across the UK and worldwide." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,600&family=Inter:wght@300;400;500;600&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <script>
    // Inject PHP data as global JS variables for dynamic logic in script.js
    window.PROPERTIES = <?= json_encode($PROPERTIES) ?>;
    window.GALLERY_IMGS = <?= json_encode($GALLERY_IMGS) ?>;
  </script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <script src="script.js" defer></script>
</head>

<body>
  <?php $routeBase = 'index.php?page='; ?>
  <!-- PAGE LOADER -->
  <div id="loader">
    <div class="loader-logo">
      <img src="images/logo.webp" alt="Noble Estates" />
    </div>
    <div class="loader-bar"></div>
    <div class="loader-text">Curating your experience</div>
  </div>

  <!-- COOKIE BANNER -->
  <div id="cookie">
    <div class="cookie-card">
      <div class="cookie-copy">
        <p class="cookie-title">Cookie Preferences</p>
        <p>
          We use cookies to improve performance, personalize content, and analyze traffic.
          Review our <a href="#">Cookie Policy</a> and <a href="#">Privacy Policy</a>.
        </p>
      </div>
      <div class="cookie-actions">
        <button id="cookie-decline" type="button">Decline</button>
        <button id="cookie-accept" type="button">Accept all</button>
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
      <span class="mob-logo"><img src="images/logo.webp" alt="Noble Estates" /></span>
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
            <a class="nav-link" href="<?= $routeBase ?>properties">For Sale <span class="arr">▾</span></a>
            <div class="mega">
              <div class="mega-col">
                <h4>Properties</h4>
                <a href="<?= $routeBase ?>properties">All properties</a>
                <a href="<?= $routeBase ?>properties">New build homes</a>
                <a href="<?= $routeBase ?>properties">Country houses</a>
                <a href="<?= $routeBase ?>properties">Penthouses</a>
                <a href="<?= $routeBase ?>properties">Cottages</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <a class="nav-link" href="<?= $routeBase ?>contact">Lettings <span class="arr">▾</span></a>
            <div class="mega">
              <div class="mega-col">
                <h4>Let</h4>
                <a href="<?= $routeBase ?>contact">Long lets</a>
                <a href="<?= $routeBase ?>contact">Short lets</a>
                <a href="<?= $routeBase ?>contact">Corporate lets</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <a class="nav-link" href="<?= $routeBase ?>about">About Us <span class="arr">▾</span></a>
            <div class="mega">
              <div class="mega-col">
                <h4>Discover</h4>
                <a href="<?= $routeBase ?>about">Our History</a>
                <a href="<?= $routeBase ?>about">Our Team</a>
                <a href="<?= $routeBase ?>about">Sustainability</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <a class="nav-link" href="<?= $routeBase ?>offices">Consultant & Mentorship <span class="arr">▾</span></a>
            <div class="mega">
              <div class="mega-col">
                <h4>Programs</h4>
                <a href="<?= $routeBase ?>offices">Real Estate Mentorship</a>
                <a href="<?= $routeBase ?>offices">Investment Consulting</a>
                <a href="<?= $routeBase ?>offices">Career Guidance</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <a class="nav-link" href="<?= $routeBase ?>insights">Testimonial <span class="arr">▾</span></a>
            <div class="mega">
              <div class="mega-col">
                <h4>Client Stories</h4>
                <a href="<?= $routeBase ?>insights">Buyer Reviews</a>
                <a href="<?= $routeBase ?>insights">Seller Experiences</a>
                <a href="<?= $routeBase ?>insights">Landlord Feedback</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <a class="nav-link" href="<?= $routeBase ?>contact">Contact Us</a>
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
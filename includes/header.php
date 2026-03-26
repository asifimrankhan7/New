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
  <script src="script.js" defer></script>
</head>

<body>
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
    <p>
      We use cookies to improve your experience and analyse site usage. By
      continuing, you accept our <a href="#">Cookie Policy</a> and
      <a href="#">Privacy Policy</a>.
    </p>
    <div style="display: flex; flex-shrink: 0">
      <button id="cookie-decline">Decline</button>
      <button id="cookie-accept">Accept all</button>
    </div>
  </div>

  <!-- BACK TO TOP -->
  <div id="btt" title="Back to top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <path d="M18 15l-6-6-6 6" />
    </svg>
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
      <a href="#" onclick="nav('home'); closeMob();">Home</a>
      <a href="#" onclick="nav('properties'); closeMob();">For Sale</a>
      <a href="#" onclick="nav('contact'); closeMob();">Lettings</a>
      <a href="#" onclick="nav('about'); closeMob();">About Us</a>
      <a href="#" onclick="nav('offices'); closeMob();">Consultant & Mentorship</a>
      <a href="#" onclick="nav('insights'); closeMob();">Testimonial</a>
      <a href="#" onclick="nav('contact'); closeMob();">Contact Us</a>
      <a href="#" onclick="nav('login'); closeMob();">Sign In</a>
    </nav>
  </div>

  <!-- HEADER UNIT (Topbar + Main Nav) -->
  <div id="main-nav-unit" class="header-unit">
    <!-- TOPBAR -->
    <div class="topbar">
      <div class="wrap">
        <div class="topbar-left">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <circle cx="12" cy="12" r="10" />
            <path
              d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10A15.3 15.3 0 0 1 12 2z" />
          </svg>
          <span>United Kingdom</span>
        </div>
        <div class="topbar-right">
          <a href="#" onclick="nav('about'); return false;">About us</a>
          <a href="#" onclick="nav('contact'); return false;">Contact us</a>
          <a href="#" onclick="nav('about'); return false;">Careers</a>
          <a href="#" onclick="nav('login'); return false;">Sign in</a>
        </div>
      </div>
    </div>

    <!-- MAIN NAVBAR (Logo Section + Nav Menu) -->
    <header id="nav-top" class="header-top">
      <div class="nav-wrap">
        <div class="nav-logo" onclick="nav('home')">
          <img src="images/logo.webp" alt="Noble Estates" />
        </div>

        <nav class="nav-menu">
          <div class="nav-item">
            <span class="nav-link" onclick="nav('home')">Home</span>
          </div>
          <div class="nav-item">
            <span class="nav-link" onclick="nav('properties')">For Sale <span class="arr">▾</span></span>
            <div class="mega">
              <div class="mega-col">
                <h4>Properties</h4>
                <a onclick="nav('properties')">All properties</a>
                <a onclick="nav('properties')">New build homes</a>
                <a onclick="nav('properties')">Country houses</a>
                <a onclick="nav('properties')">Penthouses</a>
                <a onclick="nav('properties')">Cottages</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <span class="nav-link" onclick="nav('contact')">Lettings <span class="arr">▾</span></span>
            <div class="mega">
              <div class="mega-col">
                <h4>Let</h4>
                <a onclick="nav('contact')">Long lets</a>
                <a onclick="nav('contact')">Short lets</a>
                <a onclick="nav('contact')">Corporate lets</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <span class="nav-link" onclick="nav('about')">About Us <span class="arr">▾</span></span>
            <div class="mega">
              <div class="mega-col">
                <h4>Discover</h4>
                <a onclick="nav('about')">Our History</a>
                <a onclick="nav('about')">Our Team</a>
                <a onclick="nav('about')">Sustainability</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <span class="nav-link" onclick="nav('offices')">Consultant & Mentorship <span class="arr">▾</span></span>
            <div class="mega">
              <div class="mega-col">
                <h4>Programs</h4>
                <a onclick="nav('offices')">Real Estate Mentorship</a>
                <a onclick="nav('offices')">Investment Consulting</a>
                <a onclick="nav('offices')">Career Guidance</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <span class="nav-link" onclick="nav('insights')">Testimonial <span class="arr">▾</span></span>
            <div class="mega">
              <div class="mega-col">
                <h4>Client Stories</h4>
                <a onclick="nav('insights')">Buyer Reviews</a>
                <a onclick="nav('insights')">Seller Experiences</a>
                <a onclick="nav('insights')">Landlord Feedback</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <span class="nav-link" onclick="nav('contact')">Contact Us</span>
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
  <div class="floating-cta" onclick="nav('contact')">
    Request Valuation
  </div>
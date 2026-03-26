<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Noble Estates | London & UK Luxury Property Experts</title>
    <meta
      name="description"
      content="Noble Estates — London's premier luxury estate agency. Find exclusive properties for sale and rent across the UK and worldwide."
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,600&family=Jost:wght@200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
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
    <div
      id="btt"
      title="Back to top"
      onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
    >
      <svg
        width="14"
        height="14"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
      >
        <path d="M18 15l-6-6-6 6" />
      </svg>
    </div>

    <!-- TOAST -->
    <div id="toast"></div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu">
      <div class="mob-head">
        <span class="mob-logo"
          ><img src="images/logo.webp" alt="Noble Estates"
        /></span>
        <span class="mob-close" onclick="closeMob()">✕</span>
      </div>
      <nav class="mob-nav">
        <a href="#" onclick="nav('properties'); closeMob();">Home</a>
        <a href="#" onclick="nav('properties'); closeMob();">For Sale</a>
        <a href="#" onclick="nav('properties'); closeMob();">Lettings</a>
        <a href="#" onclick="nav('properties'); closeMob();">About Us</a>
        <a href="#" onclick="nav('properties'); closeMob();">Consultant & Mentorship</a>
        <a href="#" onclick="nav('properties'); closeMob();">Testimonial</a>
        <a href="#" onclick="nav('properties'); closeMob();">Contact Us</a>
        <a href="#" onclick="nav('properties'); closeMob();">Careers</a>
        <a href="#" onclick="nav('properties'); closeMob();">Sign In</a>
      </nav>
    </div>

    <!-- TOPBAR -->
    <div class="topbar">
      <div class="wrap">
        <div class="topbar-left">
          <svg
            width="13"
            height="13"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
          >
            <circle cx="12" cy="12" r="10" />
            <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10A15.3 15.3 0 0 1 12 2z" />
          </svg>
          <span>United Kingdom</span>
        </div>
        <div class="topbar-right">
          <a href="#" onclick="nav('about'); return false;">About us</a>
          <a href="#" onclick="nav('contact'); return false;">Contact us</a>
          <a href="#">Careers</a>
          <a href="#">Sign in</a>
        </div>
      </div>
    </div>

    <!-- NAVBAR -->
    <header id="nav">
      <div class="nav-wrap">
        <div class="nav-logo" onclick="nav('home')">
          <img src="images/logo.webp" alt="Noble Estates" />
        </div>
        <nav class="nav-menu">
          <div class="nav-item">
            <span class="nav-link" onclick="nav('properties')">Home</span>
          </div>
          <div class="nav-item">
            <span class="nav-link" onclick="nav('properties')">For Sale <span class="arr">▾</span></span>
            <div class="mega">
              <div class="mega-col">
                <h4>For sale</h4>
                <a onclick="nav('properties')">All properties</a><a onclick="nav('properties')">New build homes</a><a onclick="nav('properties')">Country houses</a><a onclick="nav('properties')">Period homes</a><a onclick="nav('properties')">Penthouses</a><a onclick="nav('properties')">Cottages</a>
              </div>
              <div class="mega-col">
                <h4>For rent</h4>
                <a onclick="nav('properties')">Long lets</a><a onclick="nav('properties')">Short lets</a><a onclick="nav('properties')">Super-prime lettings</a><a onclick="nav('properties')">Corporate lets</a>
              </div>
              <div class="mega-col">
                <h4>Top features</h4>
                <a onclick="nav('properties')">Swimming pool</a><a onclick="nav('properties')">Coastal</a><a onclick="nav('properties')">Village</a><a onclick="nav('properties')">With land</a><a onclick="nav('properties')">Thameside</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <span class="nav-link" onclick="nav('properties')">Lettings <span class="arr">▾</span></span>
            <div class="mega">
              <div class="mega-col">
                <h4>Sell</h4>
                <a onclick="nav('properties')">Arrange a valuation</a><a onclick="nav('properties')">Sell with us</a><a onclick="nav('properties')">Super prime sales</a><a onclick="nav('properties')">Country & estates</a>
              </div>
              <div class="mega-col">
                <h4>Let</h4>
                <a onclick="nav('properties')">Let with us</a><a onclick="nav('properties')">Super-prime lettings</a><a onclick="nav('properties')">Short lettings</a>
              </div>
              <div class="mega-col">
                <h4>International</h4>
                <a onclick="nav('properties')">Global reach</a><a onclick="nav('properties')">International properties</a><a onclick="nav('properties')">Overseas buying guide</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <span class="nav-link" onclick="nav('properties')">About Us <span class="arr">▾</span></span>
            <div class="mega">
              <div class="mega-col">
                <h4>Buyer &amp; seller</h4>
                <a onclick="nav('properties')">Buying services</a><a onclick="nav('properties')">Selling services</a><a onclick="nav('properties')">Homeowner services</a><a onclick="nav('properties')">Valuations</a>
              </div>
              <div class="mega-col">
                <h4>Landlord &amp; tenant</h4>
                <a onclick="nav('properties')">Landlord services</a><a onclick="nav('properties')">Tenant services</a><a onclick="nav('properties')">Short lets</a><a onclick="nav('properties')">Property management</a>
              </div>
              <div class="mega-col">
                <h4>Specialist</h4>
                <a onclick="nav('properties')">Rural consultancy</a><a onclick="nav('properties')">Interior design</a><a onclick="nav('properties')">Mortgages &amp; finance</a><a onclick="nav('properties')">Planning</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <span class="nav-link" onclick="nav('properties')">Consultant &amp; Mentorship <span class="arr">▾</span></span>
            <div class="mega">
              <div class="mega-col">
                <h4>Find us</h4>
                <a onclick="nav('properties')">Find an expert</a><a onclick="nav('properties')">Find an office</a>
              </div>
              <div class="mega-col">
                <h4>London</h4>
                <a onclick="nav('properties')">Battersea</a><a onclick="nav('properties')">Chelsea</a><a onclick="nav('properties')">Fulham</a><a onclick="nav('properties')">Islington</a><a onclick="nav('properties')">Notting Hill</a>
              </div>
              <div class="mega-col">
                <h4>Country</h4>
                <a onclick="nav('properties')">Bath</a><a onclick="nav('properties')">Cambridge</a><a onclick="nav('properties')">Oxford</a><a onclick="nav('properties')">Windsor</a><a onclick="nav('properties')">Yorkshire</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <span class="nav-link" onclick="nav('properties')">Testimonial <span class="arr">▾</span></span>
            <div class="mega">
              <div class="mega-col">
                <h4>Market insights</h4>
                <a onclick="nav('properties')">Research</a><a onclick="nav('properties')">Perspectives</a><a onclick="nav('properties')">The View</a>
              </div>
              <div class="mega-col">
                <h4>Reports</h4>
                <a onclick="nav('properties')">The Wealth Report</a><a onclick="nav('properties')">UK Cities DNA</a><a onclick="nav('properties')">The Alpine Report</a><a onclick="nav('properties')">Rural Report</a>
              </div>
            </div>
          </div>
          <div class="nav-item">
            <span class="nav-link" onclick="nav('contact')">Contact Us</span>
          </div>
        </nav>
        <div class="nav-right">
          <span class="nav-icon-btn" id="nav-search-btn">
            <svg
              width="15"
              height="15"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
            >
              <circle cx="11" cy="11" r="8" />
              <line x1="21" y1="21" x2="16.65" y2="16.65" />
            </svg>
            Search
          </span>
          <button class="nav-cta-btn" onclick="nav('contact')">
            Free Valuation
          </button>
          <div
            class="nav-hamburger"
            onclick="document.getElementById('mobile-menu').classList.add('on')"
          >
            <span></span><span></span><span></span>
          </div>
        </div>
      </div>
    </header>

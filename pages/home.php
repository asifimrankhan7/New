<!-- ==================== HOME PAGE ==================== -->
<div id="page-home" class="page on">
  <!-- VIDEO HERO -->
  <div class="hero">
    <div class="hero-video-wrap">
      <video autoplay muted loop playsinline
        poster="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=1600&q=60">
        <source src="Vidio.mp4" type="video/mp4" />
      </video>
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <p class="hero-eyebrow">East London & Essex property specialists</p>
      <h1 class="hero-title serif">
        Find Your<br /><em>Perfect Home</em>
      </h1>
      <p class="hero-sub">
        Residential sales, lettings & mortgages across Ilford, Barking, Gants Hill and beyond
      </p>
      <div class="hero-search">
        <!-- TABS -->
        <div class="hsearch-tabs">
          <button class="hsearch-tab on" onclick="hTab(this,'buy')" type="button">Buy</button>
          <button class="hsearch-tab" onclick="hTab(this,'rent')" type="button">Rent</button>
          <button class="hsearch-tab" onclick="hTab(this,'new')" type="button">New Homes</button>
        </div>
        <!-- SEARCH CARD -->
        <div class="hsearch-card">
          <div class="hsearch-field hsearch-field--location">
            <i data-lucide="map-pin" class="hsearch-icon"></i>
            <div class="hsearch-field-inner">
              <span class="hsearch-field-label">Location</span>
              <input id="search-loc" type="text" class="hsearch-input" placeholder="Area, town or postcode…" />
            </div>
          </div>
          <div class="hsearch-divider"></div>
          <div class="hsearch-field">
            <i data-lucide="bed" class="hsearch-icon"></i>
            <div class="hsearch-field-inner">
              <span class="hsearch-field-label">Bedrooms</span>
              <select class="hsearch-select">
                <option value="">Any</option>
                <option>1+</option>
                <option>2+</option>
                <option>3+</option>
                <option>4+</option>
                <option>5+</option>
              </select>
            </div>
          </div>
          <div class="hsearch-divider"></div>
          <div class="hsearch-field">
            <i data-lucide="home" class="hsearch-icon"></i>
            <div class="hsearch-field-inner">
              <span class="hsearch-field-label">Type</span>
              <select class="hsearch-select">
                <option value="">Any type</option>
                <option>Apartment</option>
                <option>House</option>
                <option>Penthouse</option>
                <option>New build</option>
              </select>
            </div>
          </div>
          <div class="hsearch-divider"></div>
          <div class="hsearch-field">
            <i data-lucide="pound-sterling" class="hsearch-icon"></i>
            <div class="hsearch-field-inner">
              <span class="hsearch-field-label">Price</span>
              <select class="hsearch-select">
                <option value="">Any price</option>
                <option>Up to £300k</option>
                <option>Up to £500k</option>
                <option>Up to £750k</option>
                <option>Up to £1m</option>
                <option>£1m+</option>
              </select>
            </div>
          </div>
          <a class="hsearch-btn" href="index.php?page=properties">
            <i data-lucide="search" style="width:17px;height:17px;"></i>
            <span>Search</span>
          </a>
        </div>
      </div>
    </div>
    <div class="scroll-hint">
      <i data-lucide="mouse" style="width: 18px; height: 24px;"></i>
      <span>Scroll</span>
    </div>
  </div>

  <!-- STATS -->
  <div class="stats-band">
    <div class="stats-inner">
      <div class="stat-cell">
        <span class="stat-num serif" data-count="500">0</span><span class="stat-lbl">Properties Sold</span>
      </div>
      <div class="stat-cell">
        <span class="stat-num serif" data-count="10">0</span><span class="stat-lbl">Years in Business</span>
      </div>
      <div class="stat-cell">
        <span class="stat-num serif" data-count="98">0</span><span class="stat-lbl">% Client Satisfaction</span>
      </div>
      <div class="stat-cell">
        <span class="stat-num serif" data-count="8">0</span><span class="stat-lbl">Areas Covered</span>
      </div>
    </div>
  </div>

  <!-- FEATURED PROPERTIES -->
  <section>
    <div class="wrap">
      <div class="sec-head reveal">
        <p class="sec-eye">Curated selection</p>
        <h2 class="sec-title serif">Featured Properties</h2>
        <p class="sec-sub">
          Handpicked homes across the country's finest locations
        </p>
      </div>
      <div class="props-grid" id="featured-props">
        <?php
        $featured = array_slice($PROPERTIES, 0, 3);
        foreach ($featured as $p):
          ?>
          <div class="prop-card reveal" onclick="toast('Viewing: <?= addslashes($p['name']) ?>')">
            <div class="prop-thumb">
              <img src="<?= $p['img'] ?>" alt="<?= $p['name'] ?>" loading="lazy" />
              <span class="prop-badge"><?= $p['status'] ?></span>
              <div class="prop-fav" onclick="toggleFav(event,this)">
                <i data-lucide="heart"></i>
              </div>
            </div>
            <div class="prop-body">
              <div class="prop-price serif"><?= $p['price'] ?></div>
              <div class="prop-name"><?= $p['name'] ?></div>
              <div class="prop-loc"><i data-lucide="map-pin"
                  style="width: 11px; height: 11px; margin-right: 4px;"></i><?= $p['loc'] ?></div>
              <div class="prop-meta">
                <span class="prop-meta-item"><i data-lucide="bed"
                    style="width: 13px; height: 13px; margin-right: 4px;"></i><?= $p['beds'] ?> beds</span>
                <span class="prop-meta-item"><i data-lucide="bath"
                    style="width: 13px; height: 13px; margin-right: 4px;"></i><?= $p['baths'] ?> baths</span>
                <span class="prop-meta-item"><i data-lucide="maximize-2"
                    style="width: 13px; height: 13px; margin-right: 4px;"></i><?= $p['sqft'] ?> sq ft</span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div style="text-align: center; margin-top: 38px" class="reveal">
        <a class="btn-outline" href="index.php?page=properties">
          View all properties
        </a>
      </div>
    </div>
  </section>

  <!-- SPLIT: SELL WITH US -->
  <div class="split reveal-l">
    <div class="split-media">
      <img src="https://images.unsplash.com/photo-1560184897-502a475f7a0d?w=900&q=80" alt="Estate agent meeting" loading="lazy" />
    </div>
    <div class="split-content">
      <p class="split-eye">Sell or let with us</p>
      <h2 class="split-title serif">Local knowledge.<br />Outstanding results.</h2>
      <p class="split-body">
        With over a decade of experience serving Ilford, Gants Hill, Barking
        and surrounding areas, Aaron Holmes Residential delivers exceptional
        results for every client. Our personal approach means your property
        gets the attention it deserves.
      </p>
      <div class="btn-row">
        <a class="btn-dark" href="index.php?page=contact">
          Free valuation
        </a>
        <a class="btn-outline" href="index.php?page=contact">
          Sell with us
        </a>
      </div>
    </div>
  </div>

  <!-- SERVICES -->
  <section class="sec-cream">
    <div class="wrap">
      <div class="sec-head reveal">
        <p class="sec-eye">What we offer</p>
        <h2 class="sec-title serif">Our Services</h2>
      </div>
      <div class="services-grid">
        <div class="svc-card reveal">
          <i data-lucide="home" class="svc-icon" style="color: var(--gold); width: 32px; height: 32px; margin-bottom: 20px;"></i>
          <h3 class="svc-title serif">Residential Sales</h3>
          <p class="svc-text">
            From valuation to completion, our experienced sales team maximises
            your sale price with precise local market knowledge across East
            London and Essex.
          </p>
          <span class="svc-link">Sales services &rarr;</span>
        </div>
        <div class="svc-card reveal">
          <i data-lucide="key" class="svc-icon" style="color: var(--gold); width: 32px; height: 32px; margin-bottom: 20px;"></i>
          <h3 class="svc-title serif">Lettings</h3>
          <p class="svc-text">
            Full property management, tenant finding and rent collection for
            landlords across Ilford, Gants Hill, Barking and Barkingside.
          </p>
          <span class="svc-link">Lettings services &rarr;</span>
        </div>
        <div class="svc-card reveal">
          <i data-lucide="calculator" class="svc-icon" style="color: var(--gold); width: 32px; height: 32px; margin-bottom: 20px;"></i>
          <h3 class="svc-title serif">Mortgages</h3>
          <p class="svc-text">
            Whole-of-market mortgage advice tailored to your situation. Whether
            you are a first-time buyer or remortgaging an investment portfolio,
            we find the right deal for you.
          </p>
          <span class="svc-link">Mortgage advice &rarr;</span>
        </div>
        <div class="svc-card reveal">
          <i data-lucide="file-text" class="svc-icon" style="color: var(--gold); width: 32px; height: 32px; margin-bottom: 20px;"></i>
          <h3 class="svc-title serif">Conveyancing</h3>
          <p class="svc-text">
            Fast, reliable conveyancing through our trusted panel of solicitors.
            We keep your transaction on track at every stage of the legal process.
          </p>
          <span class="svc-link">Conveyancing &rarr;</span>
        </div>
        <div class="svc-card reveal">
          <i data-lucide="clock" class="svc-icon" style="color: var(--gold); width: 32px; height: 32px; margin-bottom: 20px;"></i>
          <h3 class="svc-title serif">Valuations</h3>
          <p class="svc-text">
            Free, no-obligation market appraisals from local specialists.
            Accurate pricing is the foundation of a successful sale or let.
          </p>
          <span class="svc-link">Book a valuation &rarr;</span>
        </div>
        <div class="svc-card reveal">
          <i data-lucide="trending-up" class="svc-icon" style="color: var(--gold); width: 32px; height: 32px; margin-bottom: 20px;"></i>
          <h3 class="svc-title serif">Mentorship</h3>
          <p class="svc-text">
            Aspiring estate agents can join the Aaron Holmes mentorship programme
            &mdash; learn the industry from the inside with hands-on guidance
            from our experienced team.
          </p>
          <a class="svc-link" href="index.php?page=contact">Enquire now &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SPLIT: COUNTRY DARK -->
  <div class="split">
    <div class="split-content sec-dark reveal-l">
      <p class="split-eye">New homes & developments</p>
      <h2 class="split-title serif" style="color: var(--white)">
        New Build Homes<br />in East London
      </h2>
      <p class="split-body" style="color: rgba(255, 255, 255, 0.5)">
        As a trusted partner to local developers, we market and sell brand-new
        homes across Barking Riverside, Barkingside, and Redbridge — with
        Help to Buy and shared ownership options available.
      </p>
      <div>
        <a class="btn-outline light" href="index.php?page=properties">
          View new homes
        </a>
      </div>
    </div>
    <div class="split-media reveal-r">
      <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=900&q=80" alt="Country estate"
        loading="lazy" />
    </div>
  </div>

  <!-- GALLERY -->
  <section>
    <div class="wrap">
      <div class="sec-head reveal">
        <p class="sec-eye">Our portfolio</p>
        <h2 class="sec-title serif">Exceptional Properties</h2>
        <p class="sec-sub">
          A glimpse into the extraordinary homes we represent
        </p>
      </div>
    </div>
    <div class="gallery" id="gallery-grid">
      <?php foreach ($GALLERY_IMGS as $index => $img): ?>
        <div class="gallery-item">
          <img src="<?= $img['url'] ?>" alt="<?= $img['label'] ?>" loading="lazy" onclick="openLightbox(<?= $index ?>)" />
          <div class="gallery-caption"><span><?= $img['label'] ?></span></div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- INSIGHTS -->
  <section class="sec-cream">
    <div class="wrap">
      <div class="sec-head reveal">
        <p class="sec-eye">Market intelligence</p>
        <h2 class="sec-title serif">Latest Insights</h2>
        <p class="sec-sub">
          Stay ahead with our award-winning research and editorial content
        </p>
      </div>
      <div class="insights-grid" id="home-insights">
        <?php
        $home_insights = array_slice($INSIGHTS, 0, 3);
        foreach ($home_insights as $i):
          ?>
          <div class="insight-card reveal" onclick="toast('Opening: <?= addslashes(mb_substr($i['title'], 0, 30)) ?>…')">
            <div class="insight-thumb"><img src="<?= $i['img'] ?>" alt="<?= $i['title'] ?>" loading="lazy" /></div>
            <div class="insight-body">
              <p class="insight-tag"><?= $i['tag'] ?></p>
              <h3 class="insight-title serif"><?= $i['title'] ?></h3>
              <p class="insight-meta"><?= $i['date'] ?> · <?= $i['read'] ?> read</p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div style="text-align: center; margin-top: 38px" class="reveal">
        <a class="btn-outline" href="index.php?page=insights">
          All insights & research
        </a>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="sec-dark">
    <div class="wrap">
      <div class="sec-head">
        <p class="sec-eye" style="color: var(--gold)">Client stories</p>
        <h2 class="sec-title serif" style="color: var(--white)">
          What Our Clients Say
        </h2>
      </div>
      <div class="testimonials-slider">
        <div class="tes-track" id="tes-track">
          <div class="tes-slide">
            <p class="tes-quote">
              "Aaron Holmes sold our family home in Gants Hill within two weeks,
              achieving above the asking price. Their knowledge of the local
              market is second to none."
            </p>
            <p class="tes-author">— Mr & Mrs Patel, Gants Hill IG2</p>
          </div>
          <div class="tes-slide">
            <p class="tes-quote">
              "As a first-time buyer I was anxious, but the team guided me
              through every step. They were always available and made the
              whole process stress-free."
            </p>
            <p class="tes-author">— James O., Ilford IG1</p>
          </div>
          <div class="tes-slide">
            <p class="tes-quote">
              "Aaron has managed my Barking rental portfolio for years.
              Reliable, professional, and genuinely invested in getting the
              best for both landlords and tenants."
            </p>
            <p class="tes-author">— Landlord client, Barking IG11</p>
          </div>
          <div class="tes-slide">
            <p class="tes-quote">
              "We relocated from overseas and Aaron Holmes made finding our
              new home in Barkingside completely seamless. Outstanding service
              from start to finish."
            </p>
            <p class="tes-author">— The Okonkwo Family, Barkingside IG6</p>
          </div>
        </div>
        <div class="tes-dots" id="tes-dots"></div>
        <div class="tes-arrows">
          <div class="tes-arrow" onclick="tesPrev()">‹</div>
          <div class="tes-arrow" onclick="tesNext()">›</div>
        </div>
      </div>
    </div>
  </section>

  <!-- NEWSLETTER -->
  <section class="sec-dark" style="border-top: 1px solid #1e1e1e">
    <div class="wrap">
      <div class="newsletter-wrap reveal">
        <p class="sec-eye" style="color: var(--gold)">Stay informed</p>
        <h2 class="sec-title serif" style="color: var(--white)">
          East London Property Updates
        </h2>
        <p class="sec-sub" style="color: rgba(255, 255, 255, 0.45)">
          Receive new listings, local market reports and property tips
          direct to your inbox — no spam, just genuine insight
        </p>
        <div class="newsletter-form">
          <input type="email" id="nl-email" placeholder="Your email address" />
          <button onclick="subscribe()">Subscribe</button>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- /home -->
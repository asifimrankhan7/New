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
      <p class="hero-eyebrow">Luxury property specialists since 1896</p>
      <h1 class="hero-title serif">
        Discover Your<br /><em>Dream Home</em>
      </h1>
      <p class="hero-sub">
        From elegant London apartments to grand country estates
      </p>
      <div class="hero-search-kf">
        <div class="scope-toggles">
          <label class="scope-radio">
            <input type="radio" name="scope" value="uk" checked>
            <span class="sr-circle"></span> UK
          </label>
          <label class="scope-radio">
            <input type="radio" name="scope" value="worldwide">
            <span class="sr-circle"></span> Worldwide
          </label>
        </div>
        <div class="search-bar-kf">
          <div class="search-input-kf">
            <i data-lucide="map-pin" style="color: #666; width: 18px; height: 18px;"></i>
            <input type="text" id="search-loc" placeholder="Search by county, town or city" />
          </div>
          <button class="btn-kf" onclick="nav('properties')">Buy</button>
          <button class="btn-kf" onclick="nav('properties')">Rent</button>
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
        <span class="stat-num serif" data-count="600">0</span><span class="stat-lbl">Global Offices</span>
      </div>
      <div class="stat-cell">
        <span class="stat-num serif" data-count="52">0</span><span class="stat-lbl">Countries</span>
      </div>
      <div class="stat-cell">
        <span class="stat-num serif" data-count="20000">0</span><span class="stat-lbl">Professionals</span>
      </div>
      <div class="stat-cell">
        <span class="stat-num serif" data-count="127">0</span><span class="stat-lbl">Years of Excellence</span>
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
              <div class="prop-loc"><i data-lucide="map-pin" style="width: 11px; height: 11px; margin-right: 4px;"></i><?= $p['loc'] ?></div>
              <div class="prop-meta">
                <span class="prop-meta-item"><i data-lucide="bed" style="width: 13px; height: 13px; margin-right: 4px;"></i><?= $p['beds'] ?> beds</span>
                <span class="prop-meta-item"><i data-lucide="bath" style="width: 13px; height: 13px; margin-right: 4px;"></i><?= $p['baths'] ?> baths</span>
                <span class="prop-meta-item"><i data-lucide="maximize-2" style="width: 13px; height: 13px; margin-right: 4px;"></i><?= $p['sqft'] ?> sq ft</span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div style="text-align: center; margin-top: 38px" class="reveal">
        <button class="btn-outline" onclick="nav('properties')">
          View all properties
        </button>
      </div>
    </div>
  </section>

  <!-- SPLIT: SELL WITH US -->
  <div class="split reveal-l">
    <div class="split-media">
      <img src="https://images.unsplash.com/photo-1560184897-502a475f7a0d?w=900&q=80" alt="Luxury interior"
        loading="lazy" />
    </div>
    <div class="split-content">
      <p class="split-eye">Sell or let with us</p>
      <h2 class="split-title serif">Local experts.<br />Global reach.</h2>
      <p class="split-body">
        Our network of more than 600 offices worldwide means your property
        receives unparalleled exposure. From discreet private sales to
        flagship marketing campaigns, we tailor every instruction to achieve
        the best possible result for you.
      </p>
      <div class="btn-row">
        <button class="btn-dark" onclick="nav('contact')">
          Arrange a valuation
        </button>
        <button class="btn-outline" onclick="nav('contact')">
          Sell with us
        </button>
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
          <h3 class="svc-title serif">Buying</h3>
          <p class="svc-text">
            Expert guidance from search to completion. We help you find the
            right home at the right price in the right location.
          </p>
          <span class="svc-link">Buying services →</span>
        </div>
        <div class="svc-card reveal">
          <i data-lucide="shopping-bag" class="svc-icon" style="color: var(--gold); width: 32px; height: 32px; margin-bottom: 20px;"></i>
          <h3 class="svc-title serif">Selling</h3>
          <p class="svc-text">
            From valuation to handover of keys, our award-winning sales team
            delivers outstanding results for every instruction.
          </p>
          <span class="svc-link">Selling services →</span>
        </div>
        <div class="svc-card reveal">
          <i data-lucide="users" class="svc-icon" style="color: var(--gold); width: 32px; height: 32px; margin-bottom: 20px;"></i>
          <h3 class="svc-title serif">Landlord services</h3>
          <p class="svc-text">
            Comprehensive property management, tenant finding and rent
            collection services for landlords across the UK.
          </p>
          <span class="svc-link">Landlord services →</span>
        </div>
        <div class="svc-card reveal">
          <i data-lucide="check-square" class="svc-icon" style="color: var(--gold); width: 32px; height: 32px; margin-bottom: 20px;"></i>
          <h3 class="svc-title serif">Tenant services</h3>
          <p class="svc-text">
            We work to understand exactly what you're looking for, matching
            you to properties that truly meet your needs.
          </p>
          <span class="svc-link">Tenant services →</span>
        </div>
        <div class="svc-card reveal">
          <i data-lucide="clock" class="svc-icon" style="color: var(--gold); width: 32px; height: 32px; margin-bottom: 20px;"></i>
          <h3 class="svc-title serif">Valuations</h3>
          <p class="svc-text">
            Accurate, independent valuations for all purposes — residential,
            commercial, rural and specialist properties.
          </p>
          <span class="svc-link">Valuation services →</span>
        </div>
        <div class="svc-card reveal">
          <i data-lucide="trending-up" class="svc-icon" style="color: var(--gold); width: 32px; height: 32px; margin-bottom: 20px;"></i>
          <h3 class="svc-title serif">Research & insights</h3>
          <p class="svc-text">
            Market-leading research and analysis to help you make informed
            property decisions, backed by decades of data.
          </p>
          <span class="svc-link" onclick="nav('insights')">View insights →</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SPLIT: COUNTRY DARK -->
  <div class="split">
    <div class="split-content sec-dark reveal-l">
      <p class="split-eye">Rural & country</p>
      <h2 class="split-title serif" style="color: var(--white)">
        Country Houses,<br />Farms & Estates
      </h2>
      <p class="split-body" style="color: rgba(255, 255, 255, 0.5)">
        Our dedicated rural team has unrivalled expertise in the buying and
        selling of country properties. From Cotswold manors to Scottish
        estates, we know every corner of the British countryside.
      </p>
      <button class="btn-outline light" onclick="nav('properties')">
        Explore country homes
      </button>
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
        <button class="btn-outline" onclick="nav('insights')">
          All insights & research
        </button>
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
              "Noble Estates found us our dream home in the Cotswolds within
              three weeks. Their attention to detail and understanding of
              exactly what we needed was extraordinary."
            </p>
            <p class="tes-author">
              — Charles & Arabella Windsor, Gloucestershire
            </p>
          </div>
          <div class="tes-slide">
            <p class="tes-quote">
              "From valuation to completion, the team handled everything
              with the utmost professionalism. We achieved a price beyond
              our expectations."
            </p>
            <p class="tes-author">— James Harrington, Chelsea London</p>
          </div>
          <div class="tes-slide">
            <p class="tes-quote">
              "Their international network is genuinely impressive. They
              connected us with a buyer from Singapore who paid asking price
              in under a fortnight."
            </p>
            <p class="tes-author">— Victoria St. Claire, Belgravia</p>
          </div>
          <div class="tes-slide">
            <p class="tes-quote">
              "The lettings team has managed our London portfolio for six
              years. Meticulous, responsive and always putting our interests
              first."
            </p>
            <p class="tes-author">— David & Clare Pemberton, Kensington</p>
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
  <section class="sec-dark" style="padding-top: 0; border-top: 1px solid #1e1e1e">
    <div class="wrap">
      <div class="newsletter-wrap reveal">
        <p class="sec-eye" style="color: var(--gold)">Stay informed</p>
        <h2 class="sec-title serif" style="color: var(--white)">
          Property & Market Updates
        </h2>
        <p class="sec-sub" style="color: rgba(255, 255, 255, 0.45)">
          Receive curated insights, new listings and market commentary
          direct to your inbox
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
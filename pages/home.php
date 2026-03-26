    <!-- ==================== HOME PAGE ==================== -->
    <div id="page-home" class="page on">
      <!-- VIDEO HERO -->
      <div class="hero">
        <div class="hero-video-wrap">
          <video
            autoplay
            muted
            loop
            playsinline
            poster="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=1600&q=60"
          >
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
          <div class="hero-search">
            <div class="search-tabs">
              <span class="stab on" data-tab="sale">For Sale</span>
              <span class="stab" data-tab="rent">To Rent</span>
              <span class="stab" data-tab="new">New Homes</span>
              <span class="stab" data-tab="commercial">Commercial</span>
            </div>
            <div class="search-row">
              <input
                type="text"
                id="search-loc"
                placeholder="Location, postcode or area…"
              />
              <select id="search-type">
                <option value="">All types</option>
                <option>Apartment</option>
                <option>House</option>
                <option>Cottage</option>
                <option>Penthouse</option>
                <option>Country house</option>
                <option>Farmhouse</option>
              </select>
              <select id="search-beds">
                <option value="">Any beds</option>
                <option>1+ beds</option>
                <option>2+ beds</option>
                <option>3+ beds</option>
                <option>4+ beds</option>
                <option>5+ beds</option>
              </select>
              <button class="search-go" onclick="doSearch()">Search</button>
            </div>
          </div>
        </div>
        <div class="scroll-hint">
          <svg
            width="18"
            height="24"
            viewBox="0 0 18 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
          >
            <rect x="1" y="1" width="16" height="22" rx="8" />
            <line x1="9" y1="6" x2="9" y2="10" />
          </svg>
          <span>Scroll</span>
        </div>
      </div>

      <!-- STATS -->
      <div class="stats-band">
        <div class="stats-inner">
          <div class="stat-cell">
            <span class="stat-num serif" data-count="600">0</span
            ><span class="stat-lbl">Global Offices</span>
          </div>
          <div class="stat-cell">
            <span class="stat-num serif" data-count="52">0</span
            ><span class="stat-lbl">Countries</span>
          </div>
          <div class="stat-cell">
            <span class="stat-num serif" data-count="20000">0</span
            ><span class="stat-lbl">Professionals</span>
          </div>
          <div class="stat-cell">
            <span class="stat-num serif" data-count="127">0</span
            ><span class="stat-lbl">Years of Excellence</span>
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
              foreach($featured as $p): 
            ?>
              <div class="prop-card reveal" onclick="toast('Viewing: <?= addslashes($p['name']) ?>')">
                <div class="prop-thumb">
                  <img src="<?= $p['img'] ?>" alt="<?= $p['name'] ?>" loading="lazy"/>
                  <span class="prop-badge"><?= $p['status'] ?></span>
                  <div class="prop-fav" onclick="toggleFav(event,this)">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                  </div>
                </div>
                <div class="prop-body">
                  <div class="prop-price serif"><?= $p['price'] ?></div>
                  <div class="prop-name"><?= $p['name'] ?></div>
                  <div class="prop-loc"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><?= $p['loc'] ?></div>
                  <div class="prop-meta">
                    <span class="prop-meta-item"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 22V12a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v10"/><path d="M2 22h20"/><rect x="9" y="11" width="6" height="11"/></svg><?= $p['beds'] ?> beds</span>
                    <span class="prop-meta-item"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 12h16v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-6zM4 12V5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v7"/></svg><?= $p['baths'] ?> baths</span>
                    <span class="prop-meta-item"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="1"/><path d="M3 9h18M9 21V9"/></svg><?= $p['sqft'] ?> sq ft</span>
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
          <img
            src="https://images.unsplash.com/photo-1560184897-502a475f7a0d?w=900&q=80"
            alt="Luxury interior"
            loading="lazy"
          />
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
              <svg
                class="svc-icon"
                viewBox="0 0 48 48"
                fill="none"
                stroke="var(--gold)"
                stroke-width="1.2"
              >
                <path d="M24 4L4 20v24h14V30h12v14h14V20z" />
              </svg>
              <h3 class="svc-title serif">Buying</h3>
              <p class="svc-text">
                Expert guidance from search to completion. We help you find the
                right home at the right price in the right location.
              </p>
              <span class="svc-link">Buying services →</span>
            </div>
            <div class="svc-card reveal">
              <svg
                class="svc-icon"
                viewBox="0 0 48 48"
                fill="none"
                stroke="var(--gold)"
                stroke-width="1.2"
              >
                <rect x="8" y="16" width="32" height="26" rx="1" />
                <path d="M16 16V12a8 8 0 0 1 16 0v4" />
                <line x1="24" y1="25" x2="24" y2="33" />
                <line x1="20" y1="29" x2="28" y2="29" />
              </svg>
              <h3 class="svc-title serif">Selling</h3>
              <p class="svc-text">
                From valuation to handover of keys, our award-winning sales team
                delivers outstanding results for every instruction.
              </p>
              <span class="svc-link">Selling services →</span>
            </div>
            <div class="svc-card reveal">
              <svg
                class="svc-icon"
                viewBox="0 0 48 48"
                fill="none"
                stroke="var(--gold)"
                stroke-width="1.2"
              >
                <circle cx="24" cy="18" r="9" />
                <path d="M8 44c0-8.837 7.163-16 16-16s16 7.163 16 16" />
              </svg>
              <h3 class="svc-title serif">Landlord services</h3>
              <p class="svc-text">
                Comprehensive property management, tenant finding and rent
                collection services for landlords across the UK.
              </p>
              <span class="svc-link">Landlord services →</span>
            </div>
            <div class="svc-card reveal">
              <svg
                class="svc-icon"
                viewBox="0 0 48 48"
                fill="none"
                stroke="var(--gold)"
                stroke-width="1.2"
              >
                <rect x="8" y="8" width="32" height="32" rx="2" />
                <path d="M16 24l6 6 10-12" />
              </svg>
              <h3 class="svc-title serif">Tenant services</h3>
              <p class="svc-text">
                We work to understand exactly what you're looking for, matching
                you to properties that truly meet your needs.
              </p>
              <span class="svc-link">Tenant services →</span>
            </div>
            <div class="svc-card reveal">
              <svg
                class="svc-icon"
                viewBox="0 0 48 48"
                fill="none"
                stroke="var(--gold)"
                stroke-width="1.2"
              >
                <circle cx="24" cy="24" r="16" />
                <path d="M24 14v10l7 4" />
              </svg>
              <h3 class="svc-title serif">Valuations</h3>
              <p class="svc-text">
                Accurate, independent valuations for all purposes — residential,
                commercial, rural and specialist properties.
              </p>
              <span class="svc-link">Valuation services →</span>
            </div>
            <div class="svc-card reveal">
              <svg
                class="svc-icon"
                viewBox="0 0 48 48"
                fill="none"
                stroke="var(--gold)"
                stroke-width="1.2"
              >
                <path d="M10 38l10-10 8 8 14-18" />
                <circle cx="24" cy="12" r="5" />
              </svg>
              <h3 class="svc-title serif">Research & insights</h3>
              <p class="svc-text">
                Market-leading research and analysis to help you make informed
                property decisions, backed by decades of data.
              </p>
              <span class="svc-link" onclick="nav('insights')"
                >View insights →</span
              >
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
          <img
            src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=900&q=80"
            alt="Country estate"
            loading="lazy"
          />
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
          <?php foreach($GALLERY_IMGS as $index => $img): ?>
            <div class="gallery-item">
              <img src="<?= $img['url'] ?>" alt="<?= $img['label'] ?>" loading="lazy" onclick="openLightbox(<?= $index ?>)"/>
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
              foreach($home_insights as $i): 
            ?>
              <div class="insight-card reveal" onclick="toast('Opening: <?= addslashes(mb_substr($i['title'], 0, 30)) ?>…')">
                <div class="insight-thumb"><img src="<?= $i['img'] ?>" alt="<?= $i['title'] ?>" loading="lazy"/></div>
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
      <section
        class="sec-dark"
        style="padding-top: 0; border-top: 1px solid #1e1e1e"
      >
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
              <input
                type="email"
                id="nl-email"
                placeholder="Your email address"
              />
              <button onclick="subscribe()">Subscribe</button>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /home -->

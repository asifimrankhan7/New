    <!-- ==================== ABOUT PAGE ==================== -->
    <div id="page-about" class="page">
      <?php
      $hero = [
        'variant' => 'page',
        'eye' => 'Our story',
        'title' => 'About Noble Estates',
        'subtitle' => 'Serving discerning clients across the UK and globe for over a century',
        'bg_image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1800&q=70',
      ];
      include 'includes/components/hero.php';
      ?>
      <section>
        <div class="wrap">
          <div class="split" style="gap: 60px; align-items: center">
            <div class="reveal-l">
              <p class="split-eye">Our heritage</p>
              <h2 class="split-title serif">
                A legacy of<br />trusted expertise
              </h2>
              <p class="split-body">
                Founded in London in 1896, Noble Estates has grown from a single
                Mayfair office to a global firm spanning 52 countries and 600+
                offices. Our independence — we remain a partnership — means our
                interests are always aligned with our clients.
              </p>
              <p class="split-body">
                We combine deep local knowledge with an international
                perspective to help clients make the right property decisions,
                whether buying their first home or managing a vast portfolio.
              </p>
            </div>
            <div
              class="reveal-r"
              style="background: var(--cream); padding: 44px"
            >
              <div
                style="
                  display: grid;
                  grid-template-columns: 1fr 1fr;
                  gap: 32px;
                  text-align: center;
                "
              >
                <div>
                  <span
                    class="stat-num serif"
                    style="color: var(--gold); font-size: 44px; display: block"
                    >127</span
                  ><span
                    class="stat-lbl"
                    style="
                      color: var(--gray-dark);
                      letter-spacing: 0.12em;
                      font-size: 10px;
                      text-transform: uppercase;
                    "
                    >Years in business</span
                  >
                </div>
                <div>
                  <span
                    class="stat-num serif"
                    style="color: var(--gold); font-size: 44px; display: block"
                    >600+</span
                  ><span
                    class="stat-lbl"
                    style="
                      color: var(--gray-dark);
                      letter-spacing: 0.12em;
                      font-size: 10px;
                      text-transform: uppercase;
                    "
                    >Global offices</span
                  >
                </div>
                <div>
                  <span
                    class="stat-num serif"
                    style="color: var(--gold); font-size: 44px; display: block"
                    >52</span
                  ><span
                    class="stat-lbl"
                    style="
                      color: var(--gray-dark);
                      letter-spacing: 0.12em;
                      font-size: 10px;
                      text-transform: uppercase;
                    "
                    >Countries</span
                  >
                </div>
                <div>
                  <span
                    class="stat-num serif"
                    style="color: var(--gold); font-size: 44px; display: block"
                    >20k+</span
                  ><span
                    class="stat-lbl"
                    style="
                      color: var(--gray-dark);
                      letter-spacing: 0.12em;
                      font-size: 10px;
                      text-transform: uppercase;
                    "
                    >Professionals</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sec-cream">
        <div class="wrap">
          <div class="sec-head reveal">
            <p class="sec-eye">Our people</p>
            <h2 class="sec-title serif">Leadership Team</h2>
          </div>
          <div class="team-grid" id="team-grid">
            <?php foreach($TEAM as $t): ?>
              <div class="team-card reveal">
                <div class="team-avatar"><img src="<?= $t['img'] ?>" alt="<?= $t['name'] ?>" loading="lazy"/></div>
                <div class="team-name"><?= $t['name'] ?></div>
                <div class="team-role"><?= $t['role'] ?></div>
                <div class="team-email"><?= $t['email'] ?></div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
      <div class="split">
        <div class="split-media reveal-l">
          <img
            src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=900&q=80"
            alt="Office interior"
            loading="lazy"
          />
        </div>
        <div class="split-content reveal-r">
          <p class="split-eye">Our values</p>
          <h2 class="split-title serif">
            Partnership.<br />Integrity. Excellence.
          </h2>
          <p class="split-body">
            As an independent partnership, we are free from external
            shareholders. Every decision we make is guided purely by what is
            best for our clients. This structure has kept us at the forefront of
            the industry for more than 127 years.
          </p>
          <a class="btn-dark" href="index.php?page=contact">
            Get in touch
          </a>
        </div>
      </div>
    </div>

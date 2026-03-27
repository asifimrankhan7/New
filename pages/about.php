<!-- ==================== ABOUT PAGE ==================== -->
<div id="page-about" class="page">
  <?php
  $hero = [
    'variant' => 'page',
    'eye' => 'Our story',
    'title' => 'About Aaron Holmes',
    'subtitle' => 'Serving East London & Essex with honesty, expertise and passion since 2014',
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
            Built on trust,<br />driven by results
          </h2>
          <p class="split-body">
            Founded in 2014 by Aaron Holmes, we began as a single-branch agency
            in Gants Hill with a clear mission: deliver honest advice and
            outstanding results for every client in East London and Essex.
          </p>
          <p class="split-body">
            A decade on, that mission remains unchanged. We are an independent,
            family-run agency — meaning our loyalty is always to our clients,
            never to shareholders. Our deep local knowledge sets us apart.
          </p>
        </div>
        <div class="reveal-r" style="background: var(--cream); padding: 44px">
          <div style="
                  display: grid;
                  grid-template-columns: 1fr 1fr;
                  gap: 32px;
                  text-align: center;
                ">
            <div>
              <span class="stat-num serif" style="color: var(--gold); font-size: 44px; display: block">10+</span>
              <span class="stat-lbl"
                style="color: var(--gray-dark); letter-spacing: 0.12em; font-size: 10px; text-transform: uppercase">Years
                in business</span>
            </div>
            <div>
              <span class="stat-num serif" style="color: var(--gold); font-size: 44px; display: block">500+</span>
              <span class="stat-lbl"
                style="color: var(--gray-dark); letter-spacing: 0.12em; font-size: 10px; text-transform: uppercase">Properties
                sold & let</span>
            </div>
            <div>
              <span class="stat-num serif" style="color: var(--gold); font-size: 44px; display: block">8</span>
              <span class="stat-lbl"
                style="color: var(--gray-dark); letter-spacing: 0.12em; font-size: 10px; text-transform: uppercase">Areas
                covered</span>
            </div>
            <div>
              <span class="stat-num serif" style="color: var(--gold); font-size: 44px; display: block">98%</span>
              <span class="stat-lbl"
                style="color: var(--gray-dark); letter-spacing: 0.12em; font-size: 10px; text-transform: uppercase">Client
                satisfaction</span>
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
        <?php foreach ($TEAM as $t): ?>
          <div class="team-card reveal">
            <div class="team-avatar"><img src="<?= $t['img'] ?>" alt="<?= $t['name'] ?>" loading="lazy" /></div>
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
      <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=900&q=80" alt="Office interior"
        loading="lazy" />
    </div>
    <div class="split-content reveal-r">
      <p class="split-eye">Our values</p>
      <h2 class="split-title serif">
        Honest.<br />Personal. Expert.
      </h2>
      <p class="split-body">
        As an independent, family-run agency, every decision we make is
        guided by what is best for our clients. We are registered with
        The Property Ombudsman, NRLA and hold Client Money Protection —
        giving you complete peace of mind at every step.
      </p>
      <div>
        <a class="btn-dark" href="index.php?page=contact">
          Get in touch
        </a>
      </div>
    </div>
  </div>
</div>
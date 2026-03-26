    <!-- ==================== OFFICES PAGE ==================== -->
    <div id="page-offices" class="page">
      <?php
      $hero = [
        'variant' => 'page',
        'eye' => 'Find us',
        'title' => 'Our Offices',
        'subtitle' => 'Over 600 offices across 52 countries worldwide',
      ];
      include 'includes/components/hero.php';
      ?>
      <section>
        <div class="wrap">
          <div class="sec-head reveal">
            <p class="sec-eye">London</p>
            <h2 class="sec-title serif">London Offices</h2>
          </div>
          <div class="offices-grid" id="london-offices">
            <?php foreach($LONDON_OFFICES as $o): ?>
              <div class="office-cell">
                <div class="office-name"><?= $o['name'] ?></div>
                <div class="office-addr"><?= $o['addr'] ?></div>
                <div class="office-ph"><?= $o['ph'] ?></div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="sec-head reveal" style="margin-top: 64px">
            <p class="sec-eye">Country</p>
            <h2 class="sec-title serif">Country Offices</h2>
          </div>
          <div class="offices-grid" id="country-offices">
            <?php foreach($COUNTRY_OFFICES as $o): ?>
              <div class="office-cell">
                <div class="office-name"><?= $o['name'] ?></div>
                <div class="office-addr"><?= $o['addr'] ?></div>
                <div class="office-ph"><?= $o['ph'] ?></div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
      <div class="map-section">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.0!2d-0.1561!3d51.5172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604ccde6e8a8b%3A0x5c20b5e3e4c3f4d!2sBaker%20St%2C%20London!5e0!3m2!1sen!2suk!4v1690000000000"
          allowfullscreen
          loading="lazy"
        ></iframe>
        <div class="map-overlay">
          <h3 class="serif">Head Office</h3>
          <p>55 Baker Street<br />London W1U 8AN<br />United Kingdom</p>
          <p style="margin-top: 10px; font-size: 13px; color: var(--gray-dark)">
            +44 (0)20 7629 8171
          </p>
          <a href="index.php?page=contact">Get directions →</a>
        </div>
      </div>
    </div>

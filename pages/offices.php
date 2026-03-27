    <!-- ==================== OFFICES PAGE ==================== -->
    <div id="page-offices" class="page">
      <?php
      $hero = [
        'variant'  => 'page',
        'eye'      => 'Find us',
        'title'    => 'Our Office',
        'subtitle' => 'Based in Gants Hill, serving East London and Essex',
        'bg_image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=1800&q=70',
      ];
      include 'includes/components/hero.php';
      ?>
      <section>
        <div class="wrap">
          <div class="sec-head reveal">
            <p class="sec-eye">Ilford & East London</p>
            <h2 class="sec-title serif">Head Office</h2>
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
            <p class="sec-eye">Areas we serve</p>
            <h2 class="sec-title serif">Covered Areas</h2>
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
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.5!2d0.0718!3d51.5731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a6b3b3b3b3b3%3A0x0!2s36%20Parham%20Drive%2C%20Ilford%20IG2%206NA!5e0!3m2!1sen!2suk!4v1690000000000"
          allowfullscreen
          loading="lazy"
        ></iframe>
        <div class="map-overlay">
          <h3 class="serif">Aaron Holmes Residential</h3>
          <p>36 Parham Drive<br />Gants Hill, Ilford<br />IG2 6NA</p>
          <p style="margin-top: 10px; font-size: 13px; color: var(--gray-dark)">
            0208 252 0115
          </p>
          <a href="https://maps.google.com/?q=36+Parham+Drive+Ilford+IG2+6NA" target="_blank">Get directions →</a>
        </div>
      </div>
    </div>

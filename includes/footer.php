<?php $routeBase = $routeBase ?? 'index.php?page='; ?>
<footer>
  <div class="wrap">
    <div class="footer-top">
      <div class="footer-intro">
        <div class="footer-brand">Noble <span>Estates</span></div>
        <p class="footer-desc">
          Independent advisors for exceptional homes and investments across London and the United Kingdom.
        </p>
      </div>
      <a class="footer-cta" href="<?= $routeBase ?>contact">Request Valuation</a>
    </div>

    <div class="footer-main">
      <div class="footer-col">
        <h5>Company</h5>
        <a href="<?= $routeBase ?>about">About Us</a>
        <a href="<?= $routeBase ?>offices">Our Offices</a>
        <a href="<?= $routeBase ?>insights">Insights</a>
      </div>

      <div class="footer-col">
        <h5>Property</h5>
        <a href="<?= $routeBase ?>properties">Buy</a>
        <a href="<?= $routeBase ?>contact">Lettings</a>
        <a href="<?= $routeBase ?>contact">Valuations</a>
      </div>

      <div class="footer-col">
        <h5>Contact</h5>
        <a href="<?= $routeBase ?>contact">55 Baker Street, London</a>
        <a href="<?= $routeBase ?>contact">+44 (0)20 7629 8171</a>
        <a href="<?= $routeBase ?>contact">hello@nobleestates.co.uk</a>
      </div>

      <div class="footer-col">
        <h5>Legal</h5>
        <a href="#">Privacy Policy</a>
        <a href="#">Cookie Policy</a>
        <a href="#">Terms of Use</a>
      </div>
    </div>

    <div class="footer-bot">
      <div class="footer-socials">
        <a class="soc" href="#" aria-label="Instagram"><i data-lucide="instagram"></i></a>
        <a class="soc" href="#" aria-label="LinkedIn"><i data-lucide="linkedin"></i></a>
        <a class="soc" href="#" aria-label="Facebook"><i data-lucide="facebook"></i></a>
      </div>
      <span>&copy; <?= date('Y') ?> Noble Estates. All rights reserved.</span>
      <div class="footer-bot-links">
        <a href="#">Privacy</a>
        <a href="#">Cookies</a>
        <a href="#">Sitemap</a>
      </div>
    </div>
  </div>
</footer>
